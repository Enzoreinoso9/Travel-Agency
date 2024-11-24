<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route::get('/clientes', function () {
    return view('clientes');
});
Route::get('/estadisticas', function () {
    return view('estadisticas');
});
Route::get('/itinerarios', function () {
    return view('itinerarios');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/notificaciones', function () {
    return view('notificaciones');
});
Route::get('/paquetes', function () {
    return view('paquetes');
});
Route::get('/proveedores', function () {
    return view('proveedores');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/soporte', function () {
    return view('soporte');
});
Route::get('/ventas', function () {
    return view('ventas');
});
Route::get('/viajes', function () {
    return view('viajes');
});
