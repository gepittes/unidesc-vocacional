<?php

use App\Models\Questao\Questao;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// HOME
Route::get('/', 'Home\HomeController@index')->name('home');


// TRATAMENTO DE ROTAS
Route::group(['namespace' => 'Errors'], function () {
    Route::get('/register', 'ErrorsController@erro404');
    Route::get('/password/reset', 'ErrorsController@erro404');
    Route::get('/candidato/teste', 'ErrorsController@erro404');

    //Pre-sets Routes
    Route::get('/404', 'ErrorsController@erro404')->name('page.404');
});


// CANDIDATO
Route::group(['namespace' => 'Candidato'], function () {
    Route::get('/candidato/cadastro', 'CandidatoController@create')->name('candidato.cadastro');
    Route::post('/candidato/cadastro', 'CandidatoController@recebeDadosFormCand')->name('candidato.dados');
    Route::post('/candidato/teste', 'CandidatoController@recebeQuestDadosCand')->name('candidato.questoes');
    Route::get('/candidato/resultado', 'CandidatoController@resultadoFinal')->name('candidato.resultado');
});


//ADM
Route::group(['namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardAdmController@index')->name('admin.dashboard');
    Route::get('/profile', 'UserAdmController@index')->name('admin.profile');
    Route::post('/profile/update', 'UserAdmController@update')->name('admin.profileUpdate');
    Route::post('/resultados', 'DashboardAdmController@showResults')->name('admin.resultados');
});




