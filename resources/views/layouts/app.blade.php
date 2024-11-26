<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $darkMode ?? '' ? 'dark' : '' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Agencia de Viajes') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- DaisyUI (si lo estás usando) -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="min-h-screen bg-gray-100 dark:bg-gray-900 flex flex-col">
    <!-- Navbar/Sidebar -->
    @livewire('navigation')
    
    <!-- Contenido Principal -->
    <div class="lg:ml-60 pt-16 flex-grow"> {{-- Ajustado para el navbar fijo y el sidebar --}}
        <main class="container mx-auto px-4 py-6">
            {{ $slot }}
        </main>
    </div>

    <!-- Footer -->
    <div class="lg:ml-60"> {{-- Alinea el footer con el contenido principal --}}
        @include('layouts.footer')
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Alpine.js (si lo necesitas) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
