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
    return view('index');
});

Route::get('/descripcion', function () {
    return view('contenidos.descripcion');
});

Route::get('/contenidos', function () {
    return view('contenidos.Contenidos');
});

Route::get('/jornalizacion', function () {
    return view('contenidos.Jornalizacion');
});

Route::get('/calendarizacion', function () {
    return view('contenidos.Calendarizacion');
});

Route::get('/presentacion', function () {
    return view('contenidos.Carta');
});

Route::get('/tareas', function () {
    return view('bitacora.tareas');
});

Route::get('/investigaciones', function () {
    return view('bitacora.investigaciones');
});

Route::get('/practicas', function () {
    return view('bitacora.practicas');
});

Route::get('/laboratorios', function () {
    return view('bitacora.laboratorios');
});

Route::get('/proyectos', function () {
    return view('bitacora.proyectos');
});


Route::get('/materiales', function () {
    return view('bitacora.materiales');
});










