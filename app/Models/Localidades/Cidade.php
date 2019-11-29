<?php

namespace App\Models\Localidades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cidade extends Model
{
    protected $fillable = ['nm_cidade', 'estado_id'];

    public static function cidadesByEstado($sigla)
    {
        return DB::table('cidades')
            ->join('estados', 'estado_id', '=', 'estados.id')
            ->where('sg_estado', $sigla)
            ->select
            (
                'cidades.id AS cidade_id',
                'nm_cidade',
                'nm_estado',
                'sg_estado'
            )
            ->get();
    }

}
