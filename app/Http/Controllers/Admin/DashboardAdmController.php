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
        $title = 'Dashboard | Admin';

        $data_tabela = Candidato::getAllData();
        $data_grafico = ResultadoCand::getDataGraficoByGroup();

        return view('admin.dashboard', compact('title', 'data_tabela', 'data_grafico'));
    }
}
