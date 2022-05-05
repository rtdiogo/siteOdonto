<?php

use Illuminate\Support\Facades\Route;


route::get('/', function () {
    return view('home');
}) -> name('home');

route::get('/quemsomos', function () {
    return view('quemsomos');
}) -> name('quemsomos');

route::get('/contato', function () {
    return view('contato');
}) -> name('contato');

route::get('/cadastro', function () {
    return view('cadastro');
}) -> name('cadastro');

route::get('/registro', function () {
    return view('registro');
}) -> name('registro');

route::get('/faleconosco', function () {
    return view('faleconosco');
}) -> name('faleconosco');

route::get('/contato', function () {
    return view('contato');
}) -> name('contato');

Route::get('/login', [App\Http\Controllers\LoginController::class, "login"]) -> name('login');
Route::post('/logar',  [App\Http\Controllers\LoginController::class, "logar"]) -> name ('logar');
Route::get('/','App\Http\Controllers\registroController@registro');