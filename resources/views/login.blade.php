@extends('layouts.plain')

@section('title', 'Login')

@section('content')


    <div class='relative min-h-screen bg-gray-800 bg-opacity-60 flex items-center login-component'>
        <div
            class='absolute right-0 h-full bg-gray-900 bg-opacity-50 p-8 rounded-l-lg shadow-md backdrop-filter backdrop-blur-lg w-full max-w-sm flex flex-col justify-center items-center'>
            <h1 class='font-bold text-white text-center mb-8'>Iniciar Sesión</h1>

            <label class="input input-bordered flex items-center gap-2 w-full mb-4 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="h-4 w-4 opacity-70 text-green-700">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                </svg>
                <input type="text" class="grow bg-transparent placeholder-gray-500" placeholder="Username" />
            </label>

            <label class="input input-bordered flex items-center gap-2 w-full mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="h-4 w-4 opacity-70 text-green-700">
                    <path fillRule="evenodd"
                        d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                        clipRule="evenodd" />
                </svg>
                <input type="password" class="grow bg-transparent placeholder-gray-500" placeholder="Password" />
            </label>

            <button class="bg-green-900 hover:bg-green-500 text-white font-semibold py-2 px-4 rounded w-full">
                Ingresar
            </button>
        </div>
    </div>

@endsection


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">
@endpush
