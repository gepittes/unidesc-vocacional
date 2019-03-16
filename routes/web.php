<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/candidato/cadastro', 'CandidatoController@create')->name('cadastroCandidato');

Route::post('/candidato/cadastro', 'CandidatoController@recebeDadosFormCand')->name('recebeForm');

Route::post('/candidato/teste', 'CandidatoController@recebeQuestDadosCand')->name('recebeQuestDadosCand');

Route::get('/candidato/teste', 'CandidatoController@error')->name('errorPage');