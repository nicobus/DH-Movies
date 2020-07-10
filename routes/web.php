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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/pelicula/{id}', 'MovieController@show')->name('pelicula.detalle');

Route::get('/peliculas', 'MovieController@list')->name('peliculas');

Route::get('/agregarpelicula', 'MovieController@create')->name('pelicula.agregar')->middleware('admin:admin');

Route::post('/agregarpelicula', 'MovieController@store')->name('pelicula.guardar')->middleware('admin:admin');

Route::get('/peliculamodificar/{id}', 'MovieController@edit')->name('pelicula.editar')->middleware('admin:admin');

Route::put('/peliculaactualizar/{id}', 'MovieController@update')->name('pelicula.actualizar')->middleware('admin:admin');

Route::delete('/eliminarpelicula', 'MovieController@destroy')->name('pelicula.eliminar')->middleware('admin:admin');

Route::get('/peliculas/{genero}', 'MovieController@byGenre')->name('peliculas.porGenero');

Route::get('/buscarpelicula', 'MovieController@byTitle')->name('peliculas.porTitulo');

Route::get('/actor/{id}', 'ActorController@show')->name('actor.detalle');

Route::get('/registrarusuario', 'UserController@create')->name('usuario.registrar');

Route::get('/listadopeliculas', 'AdminController@list')->name('peliculas.admin')->middleware('admin:admin');

Route::get('/adminbuscarpelicula', 'AdminController@byTitle')->name('porTitulo.admin')->middleware('admin:admin');

Route::post('/usuario/logout', "UserController@logout")->name('user.logout');






