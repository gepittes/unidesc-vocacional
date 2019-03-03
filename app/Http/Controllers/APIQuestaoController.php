<?php

namespace App\Http\Controllers;

use App\Models\QuestaoEnunciado;
use App\Models\QuestaoOpcoes;
use Illuminate\Http\Request;

class APIQuestaoController extends Controller
{
    public function JsonQuestoesEnum(){
        $enunciadosQuest = QuestaoEnunciado::all();
        return response($enunciadosQuest);
    }

    public function JsonQuestoesOp(){
        $enunciadosOP = QuestaoOpcoes::all();
        return response($enunciadosOP);
    }
}
