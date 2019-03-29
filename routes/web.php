<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/candidato/cadastro', 'CandidatoController@create')->name('cadastro.candidato');
Route::post('/candidato/cadastro', 'CandidatoController@recebeDadosFormCand')->name('recebe.form.cand');
Route::post('/candidato/teste', 'CandidatoController@recebeQuestDadosCand')->name('recebe.questoes.cand');
Route::get('/candidato/teste', 'CandidatoController@error')->name('page.404');
Route::get('/candidato/resultado', 'CandidatoController@resultadoFinal')->name('candidato.resultado');

