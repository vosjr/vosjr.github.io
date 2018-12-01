<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/escritorio', function () {
    return view('escritorio');
});

Route::get('/atuacao', function () {
    return view('area_atuacao');
});

Route::get('/advogados', function () {
    return view('advogados');
});

Route::get('/cliente', function () {
    return view('area_cliente');
});


Route::get('/contato', function () {
    return view('contato');
});



