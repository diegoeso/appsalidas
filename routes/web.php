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

Route::get('/', function () {
    return redirect()->route('showLogin');
});

Route::get('login/{user?}', 'Auth\LoginController@showLogin')->name('showLogin');

// Proceso de iniciar y cerrar sesión
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('administrador/inicio', 'AdministradorController@index')->name('administrador.home');
Route::get('administrador/perfil', 'AdministradorController@perfil')->name('administrador.perfil');
Route::post('administrador/registrar_usuario', 'AdministradorController@registrar_usuario')->name('administrador.registrar_usuario');

Route::get('administrador/lista_estudiantes', 'AdministradorController@lista_estudiantes')->name('administrador.lista_estudiantes');
Route::get('administrador/lista_directores', 'AdministradorController@lista_directores')->name('administrador.lista_directores');
Route::get('administrador/lista_docentes', 'AdministradorController@lista_docentes')->name('administrador.lista_docentes');
Route::get('administrador/lista_facultades', 'AdministradorController@lista_facultades')->name('administrador.lista_facultades');
Route::get('administrador/lista_programas', 'AdministradorController@lista_programas')->name('administrador.lista_programas');
Route::get('administrador/lista_actividades', 'AdministradorController@lista_actividades')->name('administrador.lista_actividades');
// Ing. Diego Sanchez
Route::get('administrador/datos-usuario/{id}', 'AdministradorController@datos_usuario');
Route::get('administrador/eliminar/{id}', 'AdministradorController@destroy');

Route::get('estudiante/home', 'EstudianteController@index')->name('estudiante.home');
Route::post('estudiante/editarActividad', 'EstudianteController@editActivity')->name('estudiante.editActivity');
Route::post('estudiante/eliminarActividad', 'EstudianteController@deleteActivity')->name('estudiante.deleteActivity');

Route::get('docente/home', 'DocenteController@index')->name('docente.home');

Route::get('director/home', 'DirectorController@index')->name('director.home');

// Auth::routes();
