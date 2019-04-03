<?php

namespace App\Models\Candidato;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Candidato extends Model
{
    Use SoftDeletes;
    protected $dates =['deleted_at'];

    public function storeCand($dadosCandDB)
    {
        //INSERT NO BANCO DO REGISTRO DO CANDIDATO
        DB::table('candidatos')->insert([
            'nome' => $dadosCandDB->nome,
            'telefone' => $dadosCandDB->telefone,
            'email' => $dadosCandDB->email,
            'cidade' => $dadosCandDB->cidade,
            'serie' => $dadosCandDB->serie,
            'resultado_curso' => $dadosCandDB->resultado_curso,
            'visitor' => $dadosCandDB->visitor,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
