<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/candidato/cadastro', 'CandidatoController@create')->name('cadastroCandidato');
Route::post('/candidato/store', 'CandidatoController@store')->name('store.cadastro');
