<?php

namespace App\Http\Controllers\APIs;

use App\Models\Questoes\QuestaoEnunciado;
use App\Models\Questoes\QuestaoOpcoes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class APIQuestaoController extends Controller
{
    public function JsonQuestoesEnum(){
        return response(QuestaoEnunciado::all('id','enunciado_questao'));
    }

    public function JsonQuestoesOp(){
        return response(QuestaoOpcoes::all('id', 'opcao_enunciado', 'opcao_letra'));
    }
}
