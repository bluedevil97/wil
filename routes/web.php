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

/*PRODUCTOS*/
Route::get('producto', function () {
    return view('productos/producto');
});

/*FIN PRODUCTOS*/

/*EMPRESA*/
Route::get('empresa', function () {
    return view('empresa/empresa');
});
/*FIN EMPRESA*/
