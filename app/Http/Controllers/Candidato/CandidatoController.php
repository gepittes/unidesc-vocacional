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
            $grupo = CandidatoServices::getGrupos();
            return view('candidato.iniciar_teste', compact('title','grupo'));
        } else {
            return view('errors.404');
        }
    }

    public function recebeQuestDadosCand(Request $request)
    {

        // Armazena RESULTADO e CANDIDATO
        $getIdResultado = ResultadoCand::storeResultado($request);
        $candidato = Candidato::storeCandidato(CandidatoServices::getSession(), $getIdResultado);

        session()->flush();

        // Chama o services para guardar o resultado do candidato na Session
        CandidatoServices::setSessionResultado($candidato);

        // Chama services para enviar o email
        /*
            OBS: Servico de email deve ser chamado anterior ao mostrar resultado na pagina
            Pois assim e possivel das F5 nas pagina sem disparar mais emails
        */
        EmailServices::sendEmail(CandidatoServices::getSessionResultado());

        return redirect(route('candidato.resultado'));
    }

    public function resultadoFinal()
    {

        // Chama o services para pegar o resultado do candidato na Session
        $resultado_cand = CandidatoServices::getSessionResultado();

        $title = 'Teste Vocacional | Resultado';

        return view('candidato.resultado_candidato', compact('resultado_cand', 'title'));
    }
}
