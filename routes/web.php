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


Route::get('fotos','Mi_Controlador@fotos')->name('fotos');

Route::get('blog','Mi_Controlador@blog')->name('noticias');

Route::get('nosotros/{nombre?}','Mi_Controlador@Nosostros')->name('nosotros');

Route::get('/', 'Mi_Controlador@index')->name('inicio');

Route::get('notas.detalle/{id}', 'Mi_Controlador@detalles')->name('detalle');

Route::post('/', 'Mi_Controlador@crear')->name('crear');

Route::get('notas.editar/{id}', 'Mi_Controlador@editar')->name('editar');

Route::put('notas.editar/{id}', 'Mi_Controlador@update')->name('editar_nota');

Route::delete('eliminar/{id}', 'Mi_Controlador@eliminar')->name('eliminar');


Auth::routes();





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
