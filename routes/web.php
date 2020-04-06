<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','InicioController@index');
Route::get('Admin/Permiso','Admin\PermisoController@index')->name('permiso');
Route::get('Admin/Crear','Admin\PermisoController@crear');
Route::get('Admin/Menu','Admin\MenuController@index')->name('menu');
Route::get('Admin/Menu/crear','Admin\MenuController@crear')->name('crear_menu');
Route::post('Admin/Menu','Admin\MenuController@guardar')->name('guardar_menu');