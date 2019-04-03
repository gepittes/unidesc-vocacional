<?php

namespace App\Http\Controllers\APIs;

use App\Models\QuestaoEnunciado;
use App\Models\QuestaoOpcoes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
