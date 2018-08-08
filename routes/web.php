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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('boleterias','BoleteriaController');
Route::get('/boleterias/create', 'BoleteriaController@create')->name('boleterias.create');
Route::get('/boleterias/listado', 'BoleteriaController@index')->name('boleterias.listado');
Route::delete('/boleterias', 'BoleteriaController@destroy')->name('boleterias.listado');
