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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('clientes', 'ClienteController');

Route::get('/tareas', 'VueController@lista');
Route::put('/tareas/actualizar', 'VueController@update');
Route::post('/tareas/guardar', 'VueController@store');
Route::delete('/tareas/borrar/{idcliente}', 'VueController@destroy');
Route::get('/tareas/buscar', 'VueController@show');

Route::resource('vuecliente', 'VueController');



Route::resource('persona', 'PersonaController');

Route::get('/persona', 'PersonaController@lista');
Route::put('/persona/actualizar', 'PersonaController@update');
Route::post('/persona/guardar', 'PersonaController@store');
Route::delete('/persona/borrar/{idpersona}', 'PersonaController@destroy');
Route::get('/persona/buscar', 'PersonaController@show');

Route::resource('vuepersona', 'PersonaController');

