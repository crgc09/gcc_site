<?php

use Illuminate\Support\Facades\Route;

//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('login', 'Auth\LoginController@login');
//
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/admin', 'HomeController@index');
Route::get('/acerca_de', 'HomeController@index');
Route::get('/educacion', 'HomeController@index');
Route::get('/portafolio', 'HomeController@index');
Route::get('/curriculum', 'HomeController@index');
Route::get('/contacto', 'HomeController@index');
//
Route::get('/user/{id}', 'CatalogosController@user');
Route::get('/redes','CatalogosController@redes');
Route::get('/menu', 'CatalogosController@menu');
Route::get('/opciones', 'CatalogosController@opciones');
Route::get('/done', 'CatalogosController@done');
Route::get('/doing', 'CatalogosController@doing');
Route::get('/todo', 'CatalogosController@todo');
Route::get('/academica', 'CatalogosController@academica');
Route::get('/certificaciones', 'CatalogosController@certificaciones');
Route::get('/idiomas', 'CatalogosController@idiomas');
Route::get('/laboral', 'CatalogosController@laboral');
Route::get('/freelance', 'CatalogosController@freelance');
Route::get('/universitario', 'CatalogosController@universitario');
Route::get('/desarrollo', 'CatalogosController@desarrollo');
//
Route::post('/contacto','ContactoController@contacto');
//
Route::resource('/sistemas','SistemasController');