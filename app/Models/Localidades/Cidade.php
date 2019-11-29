<?php

namespace App\Models\Localidades;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['nm_cidade', 'estado_id'];
}
