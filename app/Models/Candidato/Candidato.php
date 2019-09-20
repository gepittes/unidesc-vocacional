<?php

namespace App\Models\Candidato;

use App\Http\Services\CandidatoServices;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidato extends Model
{
    Use SoftDeletes;
    protected $dates =['deleted_at'];

    protected $fillable = ['nome', 'telefone', 'email', 'cidade', 'serie', 'visitor', 'id_resultado'];

    # Relacionamentos

    public function resultado()
    {
        return $this->hasOne(ResultadoCand::class, 'id');
    }


    public static function storeCandidato($dadosCand, $getIdResultado)
    {
        # Coloca id do resuldado no registro do Candidato
        $dadosCand += ['id_resultado' => $getIdResultado];

        return Candidato::create($dadosCand);
    }

    public static function getAllData()
    {
        return Candidato::all();
    }

}
