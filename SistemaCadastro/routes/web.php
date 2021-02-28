<?php

use Illuminate\Routing\RouteRegistrar;
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

Route::get("/","ClienteController@index");

Route::get("Adicionar","ClienteController@create");

Route::post("Atualizar","ClienteController@update");

Route::get("Editar_id={id}","ClienteController@edit");

Route::post("Cadastrar","ClienteController@store");
