<?php

namespace App\Http\Controllers\Candidato;

use App\Http\Services\CandidatoServices;
use App\Mail\MailCandidato;
use App\Models\Cidade\Cidade;
use App\Http\Requests\CandidatoFormRequest;
use App\Models\Candidato\Candidato;
use App\Models\Ensino\EFundamental;
use App\Models\Ensino\EMedio;
use App\Models\Candidato\ResultadoCand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        $dadosCand->session()->put('dadosCand', [
            'nome' => $dadosCand->nome,
            'telefone' => $dadosCand->telefone,
            'email' => $dadosCand->email,
            'cidade' => $dadosCand->cidade,
            'serie' => $dadosCand->serie,
            'visitor' => $dadosCand->visitor,
        ]);

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

        return view('candidato.resultado_candidato', compact('resultado_cand', 'title'));
    }


    // TODO Isso vai para um controller de Email
    public function sendMail($data)
    {
        // Enviar email para o cardidato
        Mail::to($data[1]->email)->send(new MailCandidato($data));

        return redirect()->back();
    }


}
