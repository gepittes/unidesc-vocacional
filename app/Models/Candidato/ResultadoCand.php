<?php

namespace App\Models\Candidato;

use App\Services\CandidatoServices;
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

    public static function getDataGraficoByGroup()
    {
        $letras = ['A', 'B', 'C', 'D', 'E'];
        $data_grafico = [];

        foreach ($letras as $letra)
        {
            $data_grafico += [
                'GP'.$letra =>  ResultadoCand::select('GP'.$letra)
                                ->where('GP'.$letra, '>=', 6)
                                ->count()
            ];
        }

        return (object)$data_grafico;
    }

}
