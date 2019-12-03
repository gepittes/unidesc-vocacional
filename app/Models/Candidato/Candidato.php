<?php

namespace App\Models\Candidato;

use App\Http\Services\CandidatoServices;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidato extends Model
{
    Use SoftDeletes;
    protected $dates =['deleted_at'];

    protected $fillable = ['nome', 'telefone', 'email', 'cidade_id', 'escolaridade_id', 'resultado_id', 'visitor'];

    # Relacionamentos

    public function resultado()
    {
        return $this->hasOne(ResultadoCand::class, 'id');
    }

    public static function storeCandidato($dadosCand, $resultadoID)
    {
        $dadosCand += ['resultado_id' => $resultadoID];
        return Candidato::create($dadosCand);
    }

    public static function getAllData()
    {
        return Candidato::all();
    }

}
