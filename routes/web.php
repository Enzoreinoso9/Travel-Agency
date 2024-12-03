<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Clientes;
use App\Http\Livewire\PaquetesTuristicos;
use App\Http\Livewire\Dashboard\Estadisticas;
use Illuminate\Support\Facades\Auth;

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
    
    Route::get('/ventas', function() { return view('ventas'); })->name('ventas');
    Route::get('/vuelos', function() { return view('vuelos'); })->name('vuelos');
    //Route::get('/paquetes', function() { return view('paquetes'); })->name('paquetes');
    Route::get('/pasajes', function() { return view('pasajes'); })->name('pasajes');
    
    // Ruta de logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});
