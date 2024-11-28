<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Dashboard\Estadisticas;
use App\Http\Livewire\Clientes;
use App\Http\Livewire\Ventas;
use App\Http\Livewire\Vuelos;
use App\Http\Livewire\PaquetesTuristicos;
use App\Http\Livewire\PasajesOmnibus;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;

// Ruta principal
Route::get('/', function () {
    return redirect()->route('login');
});

// Rutas de autenticación
Route::middleware('guest')->group(function () {
    Route::get('/login', [Login::class, 'render'])->name('login');
    Route::get('/register', [Register::class, 'render'])->name('register');
});

// Rutas protegidas
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', function() {
        return view('dashboard.estadisticas');
    })->name('dashboard');
    
    // Clientes
    Route::get('/clientes', function() {
        return view('clientes');
    })->name('clientes');
    
    // Ventas
    Route::get('/ventas', function() {
        return view('ventas.index');
    })->name('ventas');
    
    // Vuelos
    Route::get('/vuelos', function() {
        return view('vuelos.index');
    })->name('vuelos');
    
    // Paquetes Turísticos
    Route::get('/paquetes', function() {
        return view('paquetes.index');
    })->name('paquetes');
    
    // Pasajes de Ómnibus
    Route::get('/pasajes', function() {
        return view('pasajes.index');
    })->name('pasajes');

    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    })->name('logout');
});
