<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('login', 'HomeController@showLogin')->before('guest');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@logout');


Route::get('admin', 'AdminController@index')->before('auth');

Route::get('admin/{codigo}', 'AdminController@solicitud')->before('auth');

Route::delete('admin/delete/{id}', 'AdminController@destroy')->before('auth');


Route::get('toForm', 'SolicitudController@toForm');

Route::get('solicitud', 'SolicitudController@index');

//Route::get('solicitud/{codigo}', 'SolicitudController@showForm');

Route::post('solicitud/update', 'SolicitudController@update');