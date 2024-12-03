<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Clientes;
use App\Http\Livewire\PaquetesTuristicos;
use App\Http\Livewire\Vuelos;
use App\Http\Livewire\Dashboard\Estadisticas;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Usuarios;

// Rutas de autenticación
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return redirect('/login');
    });
    Route::get('/login', Login::class)->name('login');
    
});

// Rutas protegidas
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Estadisticas::class)->name('dashboard');
    Route::get('/clientes', Clientes::class)->name('clientes');
    Route::get('/paquetes', PaquetesTuristicos::class)->name('paquetes');
    Route::get('/vuelos', Vuelos::class)->name('vuelos');
    
    Route::get('/ventas', function() { return view('ventas'); })->name('ventas');
    Route::get('/pasajes', function() { return view('pasajes'); })->name('pasajes');
    
    // Ruta de logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/usuarios', Usuarios::class)->name('usuarios');
    // Otras rutas que solo deben ser accesibles por administradores
});
