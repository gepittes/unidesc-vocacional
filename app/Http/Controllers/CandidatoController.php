<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Http\Requests\CandidatoFormRequest;
use App\Models\Candidato;
use App\Models\EFundamental;
use App\Models\EMedio;
use Illuminate\Http\Request;

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
            $candidato->save();
            return redirect('/');
        }else{
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //EXIBI RESULTADO FINAL
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //NAO SERA USADO
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //NAO SERA USADO
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //NAO SERA USADO
    }
}
