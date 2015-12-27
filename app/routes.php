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


Route::get('/', 'HomeController@index');

Route::get('FAQ', 'HomeController@faq');

Route::get('toForm', 'HomeController@toForm');

Route::get('iniciarTramite', 'HomeController@iniciarTramite');


Route::get('solicitud', 'SolicitudController@index');

Route::post('solicitud', 'SolicitudController@index');

Route::get('final', 'SolicitudController@postSolicitud');

Route::post('final', 'SolicitudController@postSolicitud');


Route::post('solicitud/update1', 'SolicitudController@updatePrincipal');

Route::post('solicitud/update2', 'SolicitudController@updateContacto');

Route::post('solicitud/update3', 'SolicitudController@updatePasaporte');

Route::post('solicitud/update4', 'SolicitudController@updateFinanciamiento');

Route::post('solicitud/update5', 'SolicitudController@updateUltimaVisita');

Route::post('solicitud/update6', 'SolicitudController@updateVisita');

Route::post('solicitud/update7', 'SolicitudController@updateFamilia');

Route::post('solicitud/update8', 'SolicitudController@updateOcupacion');

Route::post('solicitud/update9', 'SolicitudController@updateSeguridad');