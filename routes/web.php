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

Route::get('/carros/list', 'CarroController@index')->name('listaCarros');     // LISTAR
Route::get('/carros/create', 'CarroController@create');  // FORM DE INSERÇÃO
Route::post('/carros', 'CarroController@store')->name('storeCarros');      // POST PARA INSERIR
Route::get('/carros/{carro}', 'CarroController@show')->name('showCarros');      // POST PARA INSERIR
