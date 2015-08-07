<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','FrontController@index');
Route::get('almacen','FrontController@almacen');
Route::get('proveedores', 'FrontController@proveedores');
Route::get('caja', 'FrontController@caja');
Route::get('turnos', 'FrontController@turnos');


/*  Administrar */

Route::get('admin/listado','Usercontroller@listado');
Route::resource('admin/almacen','AlmacenController');
Route::resource('admin/proveedores','ProveedoresController');
Route::resource('admin','UserController');
Route::resource('log','LogController');