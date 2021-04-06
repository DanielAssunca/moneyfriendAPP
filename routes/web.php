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
Route::get('/clientes/remove/{id}', 'ClientesController@remover')->name('clientes.remove');
Route::resource('clientes', 'clientesController');

Route::get('/eventos/remove/{id}', 'EventoController@remover')->name('eventos.remove');
Route::resource('eventos', 'EventoController');

Route::get('/contatos/remove/{id}', 'contatosController@remover')->name('contatos.remove');
Route::resource('contatos', 'contatosController');

Route::get('/acompanhamentos/remove/{id}', 'acompanhamentosController@remover')->name('acompanhamentos.remove');
Route::resource('acompanhamentos', 'acompanhamentosController');


Route::get('/clientes/eventos/{id}', 'ClientesController@eventos')->name('clientes.eventos');

Route::get('/acompanhamentos/get-evento/{id}', 'acompanhamentosController@getEvento');

Route::resource('/', 'HomeController');


