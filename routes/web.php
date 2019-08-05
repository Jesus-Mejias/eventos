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

Route::get('/','inicial@index');

Route::get('login','inicial@login')->name('login');

#Route::get('register','inicial@register')->name('register');


 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');