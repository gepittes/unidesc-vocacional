<?php

namespace App\Http\Services;

use App\Models\Candidato\Candidato;
use App\Models\Candidato\ResultadoCand;
use Illuminate\Http\Request;

class CandidatoServices {

    # Guarda em um unico array as respostas do candidato por grupo
    public static function filtrarByGrupo(Request $request, $grupo)
    {
        for ($i = 1; $i <= 12; $i++){
            $questoesGrupo["Gp".$grupo.$i] = $request->only("Gp".$grupo.$i)["Gp".$grupo.$i];
        }

        return self::countPointByGroup($questoesGrupo, $grupo);

    }

    # Realiza a contagem de ponto do candidato naquele grupo
    public static function countPointByGroup($questoesGrupo, $grupo)
    {
        $pointCandA = 0;
        $pointCandB = 0;

        for ($i = 1; $i <= 12; $i++){

            if ($questoesGrupo["Gp".$grupo.$i] == 0){ // Marcou A
                $pointCandA+=1;
            }

            if ($questoesGrupo["Gp".$grupo.$i] == 2){ // Marcou B
                $pointCandB+=1;
            }

        }

        return $totPtCandA = $pointCandA + $pointCandB;

    }

    // Salva no banco de dados o resultado
    public static function storeResultado($request)
    {

        $resultado = new ResultadoCand() ;
        $resultado->GPA = CandidatoServices::filtrarByGrupo($request, 'A');
        $resultado->GPB = CandidatoServices::filtrarByGrupo($request, 'B');
        $resultado->GPC = CandidatoServices::filtrarByGrupo($request, 'C');
        $resultado->GPD = CandidatoServices::filtrarByGrupo($request, 'D');
        $resultado->GPE = CandidatoServices::filtrarByGrupo($request, 'E');
        $resultado->save();
        $getIdResultado = $resultado->id;         // recuperar o ultimo id

        return $getIdResultado;

    }

    // Salva no banco as questoes
    public static function storeCandidato($dadosCand,$getIdResultado)
    {
        $candidato = new Candidato();
        $candidato->nome = $dadosCand['nome'] ;
        $candidato->telefone = $dadosCand['telefone'] ;
        $candidato->email = $dadosCand['email'] ;
        $candidato->cidade = $dadosCand['cidade'];
        $candidato->serie = $dadosCand['serie'] ;
        $candidato->visitor = $dadosCand['visitor'] ;
        $candidato->id_resultado = $getIdResultado ;
        $candidato->save();
    }

}
