<?php

namespace App\Models\Questao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Questao extends Model
{
    protected $table = 'questoes';

    public static function getQuestoesPorGrupo($letraGrupo)
    {
        return  Questao::select('*')->where('grupo', $letraGrupo)->get();
    }
}
