<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/candidato/cadastro', 'CandidatoController@create')->name('cadastroCandidato');
Route::post('/candidato/cadastro', 'CandidatoController@recebeDadosFormCand')->name('recebeForm');

Route::post('/teste/questoes', 'CandidatoController@recebeQuestDadosCand')->name('recebeQuestDadosCand');