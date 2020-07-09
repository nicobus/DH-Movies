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

Route::get('/agregarpelicula', 'MovieController@create')->name('pelicula.agregar');

Route::post('/agregarpelicula', 'MovieController@store')->name('pelicula.guardar');

Route::get('/peliculamodificar/{id}', 'MovieController@edit')->name('pelicula.editar');

Route::put('/peliculaactualizar/{id}', 'MovieController@update')->name('pelicula.actualizar');

Route::delete('/eliminarpelicula', 'MovieController@destroy')->name('pelicula.eliminar');

Route::get('/peliculas/{genero}', 'MovieController@byGenre')->name('peliculas.porGenero');

Route::get('/buscarpelicula', 'MovieController@byTitle')->name('peliculas.porTitulo');

Route::get('/actor/{id}', 'ActorController@show')->name('actor.detalle');

Route::get('/registrarusuario', 'UserController@create')->name('usuario.registrar');

Route::get('/listadopeliculas', 'AdminController@list')->name('peliculas.admin');

Route::get('/adminbuscarpelicula', 'AdminController@byTitle')->name('porTitulo.admin');

Route::post('/usuario/logout', "UserController@logout")->name('user.logout');






