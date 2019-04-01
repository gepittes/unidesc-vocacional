<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// HOME
Route::get('/', 'HomeController@index')->name('home');


// TRATAMENTO DE ROTAS
Route::get('/register', 'Errors\ErrorsController@erro404');
Route::get('/password/reset', 'Errors\ErrorsController@erro404');
Route::get('/candidato/teste', 'Errors\ErrorsController@erro404');
Route::get('/404', 'Errors\ErrorsController@erro404')->name('page.404');


// CANDIDATO
Route::get('/candidato/cadastro', 'CandidatoController@create')->name('cadastro.candidato');
Route::post('/candidato/cadastro', 'CandidatoController@recebeDadosFormCand')->name('recebe.form.cand');
Route::post('/candidato/teste', 'CandidatoController@recebeQuestDadosCand')->name('recebe.questoes.cand');
Route::get('/candidato/resultado', 'CandidatoController@resultadoFinal')->name('candidato.resultado');
