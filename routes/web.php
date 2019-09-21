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
    return view('Layouts.layout');

});
Route::resources([
    'sexos'=>'SexosController',
    'semestres'=>'SemestresController',
    'carreras'=>'CarrerasController',


]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
