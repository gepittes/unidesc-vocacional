<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'APIs'], function (){
    Route::get('/questoes', 'APIQuestaoController@JsonQuestoes');
    Route::get('/estados', 'APILocalidadesController@getEstados');
    Route::get('/cidades/{estado}', 'APILocalidadesController@getCidadesByEstado');
});
