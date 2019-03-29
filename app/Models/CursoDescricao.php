<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CursoDescricao extends Model
{
    public function descCand($cat)
    {
        $caracteristicaCand = DB::table('curso_descricaos')
            ->select('caracteristica', 'descricao')
            ->where('grupo_letra', '=', "$cat")->get();


//        dd($caracteristicaCand);

        return $caracteristicaCand;
    }
}
