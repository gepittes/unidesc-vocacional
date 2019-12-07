<?php

namespace App\Http\Controllers\Admin;

use App\Models\Candidato\Candidato;
use App\Models\Candidato\ResultadoCand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardAdmController extends Controller
{
    public function index()
    {
        $data_tabela = Candidato::getAllData();
        $data_grafico = ResultadoCand::getDataGraficoByGroup();

        return view('admin.dashboard', compact('data_tabela', 'data_grafico'));
    }

    public function showResults(Request $request)
    {
        $data_tabela = Candidato::getByDate($request);
        $data_grafico = ResultadoCand::getDataGraficoByGroup();
        return view('admin.dashboard', compact('data_tabela', 'data_grafico'));
    }

}
