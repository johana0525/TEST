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

Route::get('/Factura', 'FacturaController@index');
Route::get('/Factura/crear', 'FacturaController@create');
Route::get('/Factura/store/request', 'FacturaController@store');
Route::get('/Factura/{id}','FacturaController@show');


//otras rutas
Route::get('/Factura','FacturaController@prueba');
