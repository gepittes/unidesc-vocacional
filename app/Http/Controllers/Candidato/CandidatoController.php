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

        // Envia para serviço para salvar BD
        CandidatoServices::storeResultado($request);



        return redirect(route('candidato.resultado'));
    }



    public function storeCand($dadosCandDB)
    {
        // MODEL PARA FAZER O INSERT
        // TODO passar para Eloquent ORM e metodo static
        $cad  = new Candidato();
        $cad->storeCand($dadosCandDB);
    }




    // TODO Isso vai para um controller de Email
    public function sendMail($data)
    {
        // Enviar email para o cardidato
        Mail::to($data[1]->email)->send(new MailCandidato($data));

        return redirect()->back();
    }


}
