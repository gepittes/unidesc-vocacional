<?php

namespace App\Http\Controllers\Candidato;

use App\Models\Cidade\Cidade;
use App\Http\Requests\CandidatoFormRequest;
use App\Models\Candidato\Candidato;
use App\Models\Curso\CursoDescricao;
use App\Models\Curso\Curso;
use App\Models\Ensino\EFundamental;
use App\Models\Ensino\EMedio;
use App\Models\Candidato\ResultadoCand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CandidatoController extends Controller
{


    public function create()
    {
        // RETORNA FORM PARA CADASTRO
        $title = "Teste Vocacional | Cadastro";
        $cidades = Cidade::all('nome');
        $seriesFundamental = EFundamental::all('serie');
        $seriesMedio = EMedio::all('serie');
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

        if (session('dadosCand')){
            $title = 'Teste Vocacional | Teste';
            return view('candidato.iniciar_teste', compact('title'));
        }else{
            return view('errors.404');
        }
    }

    public function recebeQuestDadosCand(Request $request)
    {
        // GABARITO E DADOS DO CANDIDATO
        $gabaritoCand = $request->except('_token');
        $dadosCand = session('dadosCand');

        // ENVIA GABARITO PARA VALIDACAO
        $cursosCandidato = $this->getCursosCand($gabaritoCand); // Array (Facilita na listagem na view)
        $cursosCandString = $this->arrayToStringResultado($cursosCandidato); // Os cursos do candidado em String

        // ARMAZENA CANDIDATO
        $dadosCandDB = $this->agruparRegistro($dadosCand, $cursosCandString); // Dados em Objeto final
        $this->storeCand($dadosCandDB); // Armazena Resultado no Banco

        // BUSCA CARACTERISTICA E ARMAZENA NA SESSAO
        $caracteristicaCand = $this->caracteristicaCand(session('catCand'));
        $request->session()->put('resultadoCand', [$cursosCandidato, $dadosCandDB, $caracteristicaCand]);

        return redirect(route('candidato.resultado'));
    }

    public function caracteristicaCand($cat)
    {
        $caracteristicaCand = new CursoDescricao();
        return $caracteristicaCand->descCand($cat);

    }

    public function resultadoFinal()
    {
        // EXTRACAO DE DADOS PARA VIEW
        $data = session('resultadoCand');
        $resultadoCursosCand = $data[0];
        $dadosCand = $data[1];
        $caracteristicaCand = $data[2][0];

        if (session('resultadoCand')){
            $title = "Teste Vocacional | Resultado";
            session()->forget(['grupoCand', 'dadosCand', 'resultadoCand']);
            return view('candidato.resultado_candidato', compact('title', 'resultadoCursosCand', 'dadosCand', 'caracteristicaCand'));
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
        // AGRUPA REGISTRO DOS CURSOS DO CANDIDATO AOS DADOS DELE
        $dadosCand += ["resultado_curso" => $cursosCand];
        return $dadosCand = (object)$dadosCand;
    }

    public function getCursosCand($gabaritorCand)
    {
        // FAZ A CONTAGEM DE PONTOS POR CATEGORIA
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

        return $this->validaCategoria($a, $b, $c, $d, $e, $f);
    }

    public function validaCategoria($a, $b, $c, $d, $e, $f)
    {
        // VALIDA QUAL CATEGORIA IRA SE ADEQUAR
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

            session()->put('catCand', $cat);

            // CHAMA MODEL PARA QUERY NO BANCO
            $res = new ResultadoCand();
            return $res->resultadoCursos($cat);
    }

    public function arrayToStringResultado($resultadoQuery)
    {
        // CONCATENACAO EM UMA STRING DOS CURSOS DO CANDIDATO
        $stringCursosDB = "";
        foreach ($resultadoQuery as $curso){
            $stringCursosDB .= $curso->curso_descricao." - " ;
        }
        return $stringCursosDB;
    }
}
