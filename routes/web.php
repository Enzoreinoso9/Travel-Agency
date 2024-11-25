<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;

// Ruta principal
Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

// Rutas para invitados
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Rutas del sistema
    Route::get('/clientes', function () {
        return view('clientes');
    });
    Route::get('/estadisticas', function () {
        return view('estadisticas');
    });
    Route::get('/itinerarios', function () {
        return view('itinerarios');
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
    Route::get('/soporte', function () {
        return view('soporte');
    });
    Route::get('/ventas', function () {
        return view('ventas');
    });
    Route::get('/viajes', function () {
        return view('viajes');
    });
});

// Ruta de cierre de sesión
Route::post('/logout', function () {
    auth()->logout();
    return redirect('/');
})->name('logout');
