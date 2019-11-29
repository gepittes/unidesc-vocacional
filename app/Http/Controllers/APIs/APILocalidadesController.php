<?php

namespace App\Http\Controllers\APIs;

use App\Models\Localidades\Cidade;
use App\Models\Localidades\Estado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class APILocalidadesController extends Controller
{
    public function getEstados()
    {
        return Estado::all('id', 'sg_estado', 'nm_estado');
    }

    public function getCidadesByEstado($estado)
    {
        return Cidade::cidadesByEstado(strtoupper($estado));
    }
}
