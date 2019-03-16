<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Http\Requests\CandidatoFormRequest;
use App\Models\Candidato;
use App\Models\EFundamental;
use App\Models\EMedio;
use App\Models\ResultadoCand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //RETORNA FORM PARA CADASTRO
        $title = "Teste Vocacional | Cadastro";
        $cidades = Cidade::all();
        $seriesFundamental = EFundamental::all();
        $seriesMedio= EMedio::all();
        return view('candidato.cadastroCandidato', compact('title', 'cidades', 'seriesFundamental', 'seriesMedio'));
    }

    public function recebeDadosFormCand(CandidatoFormRequest $dadosCand)
    {
        //RECEBE DADOS CANDIDATO E VALIDA
        if (isset($dadosCand)){
            //RETORNA VIEW PARA PREENCHER QUESTOES
            $title = 'Teste Vocacional | Teste';
            return view('candidato.iniciarTeste', compact('title', 'dadosCand'));
        }
    }

    public function recebeQuestDadosCand(Request $request)
    {
        //RECEBE GABARITO E DADOS DO CANDIDATO
        $gabaritoCand = $request->except('_token', 'nome', 'telefone', 'email','serie', 'visitor');
        $dadosCand = $request->only( 'nome', 'telefone', 'email','serie', 'visitor');

        //Esse resultado esta em Array (Facilita na listagem na view)
        $resultadoCursosCand = $this->resultadoCand($gabaritoCand); //ENVIA GABARITO PARA VALIDACAO


        //aqui vem a funcao que armazena e depois chama a view com o resultado
        //todo implementar funcao para juntar arrays para ResutadoFinalCand e enviar para a funcao store
        //
        //return route(rota para view com o resultado final)


        return dd($dadosCand, $gabaritoCand, $resultadoCursosCand);
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

//        $debug = ["A" => $a, "B" => $b, "C" => $c, "D" => $d, "E" => $e, "F" => $f];
//        dd($debug);

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

            $res = new ResultadoCand();
            $resultadoCursosCand = $res->resultadoCursos($cat); //CHAMA MODEL PARA QUERY NO BANCO

            $resultadoCursosCand = $this->arrayToStringResultado($resultadoCursosCand);
            return $resultadoCursosCand;
    }


    public function arrayToStringResultado($resultadoQuery)
    {
        // FAZ CONCATENACAO EM UM STRING PARA ARMEZENA RESULTADO NO BANCO
        $stringResCursosDB = "";
        foreach ($resultadoQuery as $curso){
            $stringResCursosDB .= $curso->curso_descricao." - " ;
        }
        return $stringResCursosDB;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidatoFormRequest $request)
    {
        //ARMAZENA CADASTRO
        $candidato = new Candidato();
        if (isset($candidato)){
            $candidato->nome = $request->input('nome');
            $candidato->telefone = $request->input('telefone');
            $candidato->email = $request->input('email');
            $candidato->cidade = $request->input('cidade');
            $candidato->serie = $request->input('serie');
            $candidato->visitor = $request->input('visitor');
            $candidato->save();
            return redirect('/');
        }else{
            return redirect('/');
        }
    }
}
