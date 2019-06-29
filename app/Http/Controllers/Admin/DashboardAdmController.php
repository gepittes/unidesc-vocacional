<?php

namespace App\Http\Controllers\Admin;

use App\Models\Candidato\Candidato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardAdmController extends Controller
{
    public function index()
    {
        $title = 'Dashboard | Admin';

        $data_tabela = Candidato::getAllData();

//        dd($data_tabela[0]->resultado->GPB);

        return view('admin.dashboard', compact('title', 'data_tabela'));

    }
}
