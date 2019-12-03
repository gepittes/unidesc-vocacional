<?php

namespace App\Http\Controllers\Candidato;

use App\Http\Services\CandidatoServices;
use App\Http\Services\EmailServices;
use App\Http\Requests\CandidatoFormRequest;
use App\Models\Candidato\Candidato;
use App\Models\Candidato\ResultadoCand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class CandidatoController extends Controller
{

    public function create()
    {
        return view('candidato.cadastro', CandidatoServices::getDadosForm());
    }

    public function recebeDadosFormCand(CandidatoFormRequest $dadosCand)
    {
        CandidatoServices::setSession($dadosCand);

        if (session('dadosCand')) return view('candidato.teste', CandidatoServices::getGrupos());

        return view('errors.404');
    }

    public function recebeQuestDadosCand(Request $request)
    {
        $resultado_id = ResultadoCand::storeResultado($request);
        $candidato = Candidato::storeCandidato(CandidatoServices::getSession(), $resultado_id);

        session()->flush();

        CandidatoServices::setSessionResultado($candidato);

        try {
            EmailServices::sendEmail(CandidatoServices::getSessionResultado());
            return redirect(route('candidato.resultado'));
        } catch (\Exception $error) {
            return redirect(route('candidato.resultado'));
        }
    }

    public function resultadoFinal()
    {
        $resultado_cand = CandidatoServices::getSessionResultado();
        return view('candidato.resultado', compact('resultado_cand'));
    }
}
