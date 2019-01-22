<?php
use App\NoticiaSums;
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
	$nots = NoticiaSums::all();
    return view('homepage', compact('nots'));
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cadastroNoticias', 'CadastroNoticiaController@create')->name('cadastroNoticias');

Route::post('cadastroNoticia/save', 'CadastroNoticiaController@store');
Route::get('noticia/edit/{id}', 'CadastroNoticiaController@edit');
Route::get('noticia/delet/{id}', 'CadastroNoticiaController@destroy');
Route::post('noticia/update/{id}', 'CadastroNoticiaController@update');