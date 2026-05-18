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

//define las rutas del modulo de autenticación register, password reset, login, logout
Auth::routes();

//Si tratamos de acceder rdirecciona hacia el home
Route::get('/home', 'HomeController@index')->name('home');
