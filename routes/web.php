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

/*Home*/

Route::get('/', 'App\Http\Controllers\Site\HomeController')->name('site.home');

/*Home*/

/*Cardapio*/

Route::get('/quem-somos', 'App\Http\Controllers\Site\QuemSomosController')->name('site.sobre-nos');

/*Cardapio*/

/*Cardapio*/

Route::get('/cardapio', 'App\Http\Controllers\Site\CardapioController@index')->name('site.cardapio');

/*Cardapio*/


/*Contato*/

Route::get('/contato', 'App\Http\Controllers\Site\ContatoController@index')->name('site.contato');

/*Contato*/