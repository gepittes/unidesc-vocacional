<?php

namespace App\Models\Candidato;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Candidato extends Model
{
    Use SoftDeletes;
    protected $dates =['deleted_at'];


}
