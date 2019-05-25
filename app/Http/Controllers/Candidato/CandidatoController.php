<?php

namespace App\Http\Controllers\Candidato;

use App\Http\Services\CandidatoServices;
use App\Http\Services\EmailServices;
use App\Models\Cidade\Cidade;
use App\Http\Requests\CandidatoFormRequest;
use App\Models\Candidato\Candidato;
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
        // Chama o services para guardar os dados candidato na Session
        CandidatoServices::setSession($dadosCand);

        if (session('dadosCand')) {
            $title = 'Teste Vocacional | Teste';
            return view('candidato.iniciar_teste', compact('title'));
        } else {
            return view('errors.404');
        }
    }

    public function recebeQuestDadosCand(Request $request)
    {
        $dadosCand = session('dadosCand'); // RESGATA DADOS CANDIDATO

        // Armazena RESULTADO e CANDIDATO
        $getIdResultado = ResultadoCand::storeResultado($request);
        $candidato = Candidato::storeCandidato($dadosCand, $getIdResultado);


        session()->flush();
        session()->put('resultado_cand', $candidato);

        return redirect(route('candidato.resultado'));
    }

    public function resultadoFinal()
    {
        $resultado_cand = session('resultado_cand'); // RESGATA RESULTADO FINAL DO CANDIDATO
        $title = 'Teste Vocacional | Resultado';

        // Chama services para enviar o email
        EmailServices::sendEmail($resultado_cand);

        return view('candidato.resultado_candidato', compact('resultado_cand', 'title'));
    }

}
