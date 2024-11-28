@extends('layouts.plain')

@section('title', 'Registro')

@section('content')
<div class='relative min-h-screen bg-gray-800 bg-opacity-60 flex items-center login-component'>
    <div class='absolute right-0 h-full bg-gray-900 bg-opacity-50 p-8 rounded-l-lg shadow-md backdrop-filter backdrop-blur-lg w-full max-w-sm flex flex-col justify-center items-center'>
        <h1 class='font-bold text-white text-center mb-8'>Registro de Usuario</h1>

        <form wire:submit.prevent="register" class="w-full">
            <!-- Nombre de Usuario -->
            <label class="input input-bordered flex items-center gap-2 w-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70 text-green-700">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                </svg>
                <input wire:model="nombre_usuario" 
                       type="text" 
                       class="grow bg-transparent placeholder-gray-500" 
                       placeholder="Nombre de Usuario" />
            </label>
            @error('nombre_usuario') 
                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> 
            @enderror

            <!-- Email -->
            <label class="input input-bordered flex items-center gap-2 w-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70 text-green-700">
                    <path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z"/>
                    <path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z"/>
                </svg>
                <input wire:model="email" 
                       type="email" 
                       class="grow bg-transparent placeholder-gray-500" 
                       placeholder="Email" />
            </label>
            @error('email') 
                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> 
            @enderror

            <!-- Contraseña -->
            <label class="input input-bordered flex items-center gap-2 w-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70 text-green-700">
                    <path fillRule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clipRule="evenodd" />
                </svg>
                <input wire:model="password" 
                       type="password" 
                       class="grow bg-transparent placeholder-gray-500" 
                       placeholder="Contraseña" />
            </label>
            @error('password') 
                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> 
            @enderror

            <!-- Confirmar Contraseña -->
            <label class="input input-bordered flex items-center gap-2 w-full mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70 text-green-700">
                    <path fillRule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clipRule="evenodd" />
                </svg>
                <input wire:model="password_confirmation" 
                       type="password" 
                       class="grow bg-transparent placeholder-gray-500" 
                       placeholder="Confirmar Contraseña" />
            </label>

            <button type="submit" 
                    class="bg-green-900 hover:bg-green-500 text-white font-semibold py-2 px-4 rounded w-full mb-4">
                Registrarse
            </button>

            <div class="text-center">
                <a href="{{ route('login') }}" 
                   class="text-sm text-gray-300 hover:text-white hover:underline">
                    ¿Ya tienes una cuenta? Inicia sesión
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">
@endpush
