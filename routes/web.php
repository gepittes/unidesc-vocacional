<?php

use App\Models\Questao\Questao;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// HOME
Route::get('/', 'Home\HomeController@index')->name('home');


// TRATAMENTO DE ROTAS
Route::group(['namespace' => 'Errors'], function (){
    Route::get('/register', 'ErrorsController@erro404');
    Route::get('/password/reset', 'ErrorsController@erro404');
    Route::get('/candidato/teste', 'ErrorsController@erro404');

    //Pre-sets Routes
    Route::get('/404', 'ErrorsController@erro404')->name('page.404');
});


// CANDIDATO
Route::group(['namespace' => 'Candidato'], function (){
    Route::get('/candidato/cadastro', 'CandidatoController@create')->name('cadastro.candidato');
    Route::post('/candidato/cadastro', 'CandidatoController@recebeDadosFormCand')->name('recebe.form.cand');
    Route::post('/candidato/teste', 'CandidatoController@recebeQuestDadosCand')->name('recebe.questoes.cand');
    Route::get('/candidato/resultado', 'CandidatoController@resultadoFinal')->name('candidato.resultado');
});


//ADM
Route::group(['namespace' => 'Admin', 'middleware' => ['auth']], function (){
   Route::get('/dashboard', 'DashboardAdmController@index')->name('admin.dashboard');
});




