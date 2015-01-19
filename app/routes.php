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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contacto', 'HomeController@contacto');
Route::post('/contacto', 'HomeController@contacto_enviar');
Route::get('/propiedades', 'HomeController@propiedades');
Route::get('/propiedades/ver/{id_propiedad}', 'HomeController@propiedad_ver');
Route::post('/propiedades/contacto', 'HomeController@propiedadContacto');

Route::get('/simulador', 'HomeController@simulador');

Route::get('/login', 'LoginController@showLogin');
Route::post('/login', 'LoginController@doLogin');
Route::get('/logout', 'LoginController@doLogout');



Route::group(array('before' => 'auth'), function()
{
    Route::get('/admin', 'AdminController@index');

    Route::get('/admin/propiedades/crear', 'AdminPropiedadesController@crear');
    Route::post('/admin/propiedades/crear', 'AdminPropiedadesController@guardar');
    Route::get('/admin/propiedades/editar/{id_propiedad}', 'AdminPropiedadesController@editar');
    Route::post('/admin/propiedades/actualizar', 'AdminPropiedadesController@actualizar');
    Route::get('/admin/propiedades/ver/{id_propiedad}', 'AdminPropiedadesController@ver');
    Route::get('/admin/propiedades/listar', 'AdminPropiedadesController@listar');
    Route::get('/admin/propiedades/eliminar/{id_propiedad}', 'AdminPropiedadesController@eliminar');
    Route::post('/admin/propiedades/cargarImg', 'AdminPropiedadesController@cargarImg');
    Route::post('/admin/propiedades/deleteImg', 'AdminPropiedadesController@deleteImg');

});


App::missing(function($exception)
{
    return Response::view('backoffice/404', array(), 404);

});