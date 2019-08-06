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

Route::get('/','Dashboard@index');
 
Auth::routes();


// |~> Rutas del administrador
// ]: Ruta para la pagina principal del administrador
Route::get('admin-dashboard', 'Admin\HomeController@index');

// |~> Rutas para el usuario
// ]: Ruta para la pagina principal del usuario
Route::get('user-dashboard', 'User\PageController@index');