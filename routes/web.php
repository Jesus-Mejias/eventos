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
// ]: Ruta psra agregar eventos
Route::get('create-event', 'Admin\EventController@create')->name('newEvent');
//]: Ruta para lista de asistencia
Route::get('atendee', 'Admin\EventController@list')->name('attendeeList');
//]: Ruta para el rating
Route::get('rating', 'Admin\EventController@rating')->name('rating');

//]: Route::post('store', 'Admin\EventController@store')->name('storeEvent');




// |~> Rutas para el usuario
// ]: Ruta para la pagina principal del usuario
Route::get('user-dashboard', 'User\PageController@index');
//]:Ruta para el regitro a un evento
Route::get('goregister', 'User\PageController@register')->name('register');
//]: Ruta para ver mis eventos
Route::get('myEvents', 'User\PageController@myEvents')->name('myEvents');

