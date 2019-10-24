<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hola esto es una prueba';
});
|
*/


Route::get('/', 'InicioController@index');
//Route::get('permiso', 'PermisoController@index');
//Route::view('permiso', 'permiso');

//Route::get('admin/sistema/permiso', 'PermisoController@index')->name('permiso');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('permiso','permisoController@index')->name('permiso');
    Route::get('permiso/crear','permisoController@crear')->name('crear_permiso');
});