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


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');


// ROTA DE CLIENTES
Route::resource('/clientes', 'ClienteController');

// ROTA DE AUTORES
Route::resource('/autores', 'AutorController');

// ROTA DE EDITORAS
Route::resource('/editoras', 'EditoraController');

// ROTA DE LIVROS
Route::resource('/livros', 'LivroController');

// ROTA DE USUARIOS
Route::resource('/usuarios', 'UsuarioController');

// ROTA DE FUNCIONARIOS
Route::resource('/funcionarios', 'FuncionarioController');

// VENDA
Route::resource('/vendas', 'VendaController');

// REALIZAR VENDA
Route::resource('realizarVendas', 'RealizarVendaController');

// ITENS
Route::resource('itens', 'ItemController');

Auth::routes();


