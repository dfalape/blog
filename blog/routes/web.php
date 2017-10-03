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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


//routa para listar publicaciones
Route::get('/listar','PublicationController@listar');


//ruta para crear pujblicaciones
Route::get('/crear','PublicationController@crear');


//ruta para modificar publicaciones
Route::get('/modificar', 'PublicationController@modificar');
