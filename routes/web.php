<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function showLocais() {
    return view('site.inicio');
});*/

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', 'HomeController@index')->name('home'); // alterei após mudar o provider

//
Route::get('/estado/novo', 'EstadosController@create');
Route::post('/estado/novo', 'EstadosController@store')->name('salvar_estado');
Route::get('/estados/ver', 'EstadosController@show');
Route::get('/estados/novo', 'EstadosController@create');
Route::get('/estado/del{id}', 'EstadosController@destroy')->name('excluir_estado');
Route::get('/estado/edit{id}', 'EstadosController@edit')->name('editar_estado');
Route::post('/estado/edit{id}', 'EstadosController@update')->name('atualizar_estado');


Route::get('/cidade/novo', 'CidadesController@create');
Route::post('/cidade/novo', 'CidadesController@store')->name('salvar_cidade');
Route::get('/cidades/ver', 'CidadesController@show');
Route::get('/cidades/novo', 'CidadesController@create');
Route::get('/cidade/del{id}', 'CidadesController@destroy')->name('excluir_cidade');
Route::get('/cidade/edit{id}', 'CidadesController@edit')->name('editar_cidade');
Route::post('/cidade/edit{id}', 'CidadesController@update')->name('atualizar_cidade');


Route::get('/categoria/novo', 'CategoriaController@create');
Route::post('/categoria/novo', 'CategoriaController@store')->name('salvar_categoria');
Route::get('/categorias/ver', 'CategoriaController@show');
Route::get('/categorias/novo', 'CategoriaController@create');
Route::get('/categoria/del{id}', 'CategoriaController@destroy')->name('excluir_categoria');
Route::get('/categoria/edit{id}', 'CategoriaController@edit')->name('editar_categoria');
Route::post('/categoria/edit{id}', 'CategoriaController@update')->name('atualizar_categoria');


Route::get('/local/novo', 'LocalController@create');
Route::post('/local/novo', 'LocalController@store')->name('salvar_local');
Route::get('/locais/ver', 'LocalController@show');
Route::get('/locais/novo', 'LocalController@create');
Route::get('/local/del{id}', 'LocalController@destroy')->name('excluir_local');
Route::get('/local/edit{id}', 'LocalController@edit')->name('editar_local');
Route::post('/local/edit{id}', 'LocalController@update')->name('atualizar_local');

Route::get('/site/inicio', 'LocalController@showLocais')->name('mostrar_locais');
Route::get('/', 'LocalController@showLocais')->name('mostrar_locais');

Route::get('/site/comentar{id}', 'LocalController@avaliar')->name('avaliar_local');
Route::post('/avaliacao/novo', 'AvaliacaoController@store')->name('salvar_avaliacao');


Route::get('/avaliacao/ver', 'AvaliacaoController@show');
Route::get('local/del/{id}', 'AvaliacaoController@destroy')->name('excluir_avaliacao');
/*Route::get('/local/avaliar{id}', 'LocalController@avaliar')->name(avaliar_local);
Route::get('/locais', [App\Http\Controllers\HomeController::class, 'locais'])->name('locais');*/
