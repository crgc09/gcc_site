<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/acerca_de', 'HomeController@index');
Route::get('/educacion', 'HomeController@index');
Route::get('/portafolio', 'HomeController@index');
Route::get('/curriculum', 'HomeController@index');
Route::get('/contacto', 'HomeController@index');

