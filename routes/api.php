<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'APIs'], function (){
    Route::get('/questoes', 'APIQuestaoController@JsonQuestoes');
    Route::get('/estados', 'APILocalidadesController@getEstados')->name('api.get.estados');
    Route::get('/cidades/{estado}', 'APILocalidadesController@getCidadesByEstado')->name('api.get.cidades');
});
