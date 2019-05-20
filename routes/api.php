<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'APIs'], function (){
    Route::get('/questoes', 'APIQuestaoController@JsonQuestoes');
});
