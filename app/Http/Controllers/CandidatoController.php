<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Http\Requests\CandidatoFormRequest;
use App\Models\Candidato;
use App\Models\CursoDescricao;
use App\Models\EFundamental;
use App\Models\EMedio;
use App\Models\ResultadoCand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatoController extends Controller
{
    public function error(){
        return view('errors.404');
    }

    public function create()
    {
        //Caso haja algum dado de um candidato anterior ele limpa os dados da sessao.
        session()->forget('resultadoCand');

        //RETORNA FORM PARA CADASTRO
        $title = "Teste Vocacional | Cadastro";
        $cidades = Cidade::all();
        $seriesFundamental = EFundamental::all();
        $seriesMedio= EMedio::all();
        return view('candidato.cadastro_candidato', compact('title', 'cidades', 'seriesFundamental', 'seriesMedio'));
    }

    public function recebeDadosFormCand(CandidatoFormRequest $dadosCand)
    {
        // GUARDA DADOS DO CANDIDATO NA SESSION
        $dadosCand->session()->put('dadosCand',[
            'nome' => $dadosCand->nome,
            'telefone' => $dadosCand->telefone,
            'email' => $dadosCand->email,
            'cidade' => $dadosCand->cidade,
            'serie' => $dadosCand->serie,
            'visitor' => $dadosCand->visitor,
        ]);

        // for Debug
//        $dadosCand->session()->flush();
//        $var = session('dadosCand');
//        dd($dadosCand->session()->isStarted(), $dadosCand->session(), $var);

        //RECEBE DADOS CANDIDATO E VALIDA
        if (isset($dadosCand)){
            //RETORNA VIEW PARA PREENCHER QUESTOES
            $title = 'Teste Vocacional | Teste';
            return view('candidato.iniciar_teste', compact('title'));
        }
    }

    public function recebeQuestDadosCand(Request $request)
    {
        //RECEBE GABARITO E DADOS DO CANDIDATO
        $gabaritoCand = $request->except('_token');
        $dadosCand = session('dadosCand');

        // for Debug
//        dd($gabaritoCand, $dadosCand);

        //ENVIA GABARITO PARA VALIDACAO
        $resultadoCursosCand = $this->resultadoCand($gabaritoCand); //Esse resultado esta em Array (Facilita na listagem na view)

        $cursosCandString = $this->arrayToStringResultado($resultadoCursosCand); //Os cursos do candidado em String

        $dadosCandDB = $this->agruparRegistro($dadosCand, $cursosCandString); //Dados em Objeto final

        $this->storeCand($dadosCandDB); // Armazena Resultado no Banco

        $cat = session('grupoCand'); // Guardo a Categoria do Candidato

        $caracteristicaCand = $this->caracteristicaCand($cat); // Retorna do banco a Caracteritica do candidato
//        dd($caracteristicaCand);

        // Envia para a sessao dados do Candidato e seus Cursos
        $request->session()->put('resultadoCand', [$resultadoCursosCand, $dadosCandDB, $caracteristicaCand]);

        /*Uso apenas para reduzir a carga de dados levada na sessao apenas*/
        session()->forget('dadosCand'); // Limpa resquicios de dados redundantes da sessao do Formulario

        // for Debug
//        $request->session()->flush();
//        dd(session('resultadoCand'));
        return redirect(route('candidato.resultado'));
    }

    public function caracteristicaCand($cat)
    {
        $caracteristicaCand = new CursoDescricao();
        $caracteristicaCand = $caracteristicaCand->descCand($cat);

        return $caracteristicaCand;
    }

    public function resultadoFinal()
    {
        $data = session('resultadoCand'); // Pega dados da Sessao
//        dd($data);

        $resultadoCursosCand = $data[0];
        $dadosCandDB = $data[1];
        $caracteristicaCand = $data[2][0];

//        dd($resultadoCursosCand, $dadosCandDB, $caracteristicaCand);


        // for Debug
//        dd(session()->has('resultadoCand'), session());

        if (session()->has('resultadoCand')){
            $title = "Teste Vocacional | Resultado";
            session()->forget('resultadoCand');
            return view('candidato.resultado_candidato', compact('title', 'resultadoCursosCand', 'dadosCandDB', 'caracteristicaCand'));
        }else{
            session()->flush();
            return redirect(route('cadastro.candidato'));
        }
    }

    public function storeCand($dadosCandDB)
    {
        // MODEL PARA FAZER O INSERT
        $cad  = new Candidato();
        $cad->storeCand($dadosCandDB);
    }

    public function agruparRegistro($dadosCand, $cursosCand)
    {
        //AGRUPA REGISTRO DO CANTIDADO TUDO EM UM ARRAY
        $dadosCand += ["resultado_curso" => $cursosCand];
        $dadosCand = (object)$dadosCand; //Passa de array para Objeto

        return $dadosCand;
    }

    public function resultadoCand($gabaritorCand)
    {
        //FAZ A CONTAGEM DE PONTOS POR CATEGORIA
        $a = 0; $b = 0; $c = 0; $d = 0; $e = 0; $f = 0;

        for ($i = 1; $i <= 15; $i++){
            switch ($gabaritorCand[$i]){
                case "A":
                    $a++;
                    break;
                case "B";
                    $b++;
                    break;
                case "C";
                    $c++;
                    break;
                case "D":
                    $d++;
                    break;
                case "E";
                    $e++;
                    break;
                case "F";
                    $f++;
                    break;
            }
        }

        $resultadoCursosCand = $this->validaCategoriaResultado($a, $b, $c, $d, $e, $f);
        return $resultadoCursosCand;
    }

    public function validaCategoriaResultado($a, $b, $c, $d, $e, $f)
    {
        //VERIFICAR QUAL CATEGORIA IRA SE ADEQUAR (Maior pontuacao na Categoria)
        $cat = "";

            if ($a > $b and $a > $c and $a > $d and $a > $e and $a > $f){
                $cat = "A";
            }elseif ($b > $c and $b > $d and $b > $e and $b > $f){
                $cat = "B";
            }elseif ($c > $d and $c > $e and $c > $f){
                $cat = "C";
            }elseif ($d > $e and $d > $f){
                $cat = "D";
            }elseif ($e > $f){
                $cat = "E";
            }else{
                $cat = "F";
            }

            //CHAMA MODEL PARA QUERY NO BANCO
            $res = new ResultadoCand();
            $resultadoCursosCand = $res->resultadoCursos($cat);

            //Guarda na Sessao o grupo do Candidato
            session()->put('grupoCand', $cat);
//            dd(session());

            return $resultadoCursosCand;
    }


    public function arrayToStringResultado($resultadoQuery)
    {
        // FAZ CONCATENACAO EM UM STRING PARA ARMEZENAR RESULTADO NO BANCO (formato em String)
        $stringResCursosDB = "";
        foreach ($resultadoQuery as $curso){
            $stringResCursosDB .= $curso->curso_descricao." - " ;
        }
        return $stringResCursosDB;
    }
}
