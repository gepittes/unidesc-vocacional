<?php

namespace App\Models\Candidato;

use App\Http\Services\CandidatoServices;
use Illuminate\Database\Eloquent\Model;

class ResultadoCand extends Model
{

    protected $table = 'resultados';

    protected $fillable = ['GPA', 'GPB', 'GPC', 'GPD', 'GPE'];

    public static function storeResultado($request)
    {

        $resultado = new ResultadoCand() ;
        $resultado->GPA = CandidatoServices::filtrarByGrupo($request, 'A');
        $resultado->GPB = CandidatoServices::filtrarByGrupo($request, 'B');
        $resultado->GPC = CandidatoServices::filtrarByGrupo($request, 'C');
        $resultado->GPD = CandidatoServices::filtrarByGrupo($request, 'D');
        $resultado->GPE = CandidatoServices::filtrarByGrupo($request, 'E');
        $resultado->save();

        return $getIdResultado = $resultado->id;  // recupera ID do resultado do candidato

    }

}
