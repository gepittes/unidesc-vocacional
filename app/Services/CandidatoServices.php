<?php

namespace App\Http\Services;

use App\Http\Requests\CandidatoFormRequest;
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

    // GUARDA DADOS DO CANDIDATO NA SESSION
    public static function setSession(CandidatoFormRequest $dadosCand)
    {
        $dadosCand->session()->put('dadosCand', [
            'nome' => $dadosCand->nome,
            'telefone' => $dadosCand->telefone,
            'email' => $dadosCand->email,
            'cidade' => $dadosCand->cidade,
            'serie' => $dadosCand->serie,
            'visitor' => $dadosCand->visitor,
        ]);
    }

    // RESGATA DADOS CANDIDATO
    public static function getSession()
    {

        return  session('dadosCand');

    }

    // GUARDA O RESULTADO DO CANDIDATO NA SESSION
    public static function setSessionResultado($candidato)
    {
        session()->put('resultado_cand', $candidato);
    }

    // RESGATA RESULTADO FINAL DO CANDIDATO
    public static function getSessionResultado()
    {

        return  session('resultado_cand');

    }

    // LISTAR GRUPOS
    public static function getGrupos()
    {
        $grupo = ['','A','B','C','D','E'];
        return $grupo;

    }

}
