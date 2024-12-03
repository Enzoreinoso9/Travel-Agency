<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Alpine.js -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @auth
                <div x-data="{ sidebarOpen: true }" class="flex h-screen bg-gray-100 dark:bg-gray-900">
                    <!-- Sidebar -->
                    <div :class="{'w-64': sidebarOpen, 'w-20': !sidebarOpen}"
                         class="flex flex-col fixed h-screen bg-emerald-800 text-white transition-all duration-300">
                        
                        <!-- Toggle Button -->
                        <button @click="sidebarOpen = !sidebarOpen" 
                                class="absolute right-0 top-3 transform translate-x-full bg-emerald-800 text-white p-2 rounded-r-md">
                            <svg x-show="!sidebarOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                            </svg>
                            <svg x-show="sidebarOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                            </svg>
                        </button>

                        <!-- Navigation Links -->
                        <nav class="flex-1 overflow-y-auto">
                            <ul class="p-2 space-y-2">
                                <li>
                                    <a href="{{ route('dashboard') }}" 
                                       class="flex items-center p-2 rounded-lg hover:bg-emerald-700 {{ request()->routeIs('dashboard') ? 'bg-emerald-900' : '' }}">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                        </svg>
                                        <span class="ml-3" x-show="sidebarOpen">Dashboard</span>
                                    </a>
                                </li>

                                <!-- Otros enlaces de navegación aquí -->
                                @include('layouts.navigation-links')
                            </ul>
                        </nav>

                        <!-- User Profile y Logout -->
                        <div class="border-t border-emerald-700 mt-auto">
                            <div class="p-4 bg-emerald-900">
                                <div class="flex items-center mb-3">
                                    <img class="h-8 w-8 rounded-full" 
                                         src="{{ auth()->user()->profile_photo_url ?? asset('images/default-avatar.png') }}" 
                                         alt="{{ auth()->user()->name }}">
                                    <div class="ml-3" x-show="sidebarOpen">
                                        <p class="text-sm font-medium text-white">{{ auth()->user()->name }}</p>
                                        <p class="text-xs text-gray-300">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                                
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" 
                                            class="w-full flex items-center p-2 text-sm text-white rounded-lg hover:bg-emerald-700">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <span class="ml-3" x-show="sidebarOpen">Cerrar sesión</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div :class="{'ml-64': sidebarOpen, 'ml-20': !sidebarOpen}"
                         class="flex-1 transition-all duration-300">
                        <main class="p-8">
                            {{ $slot }}
                        </main>
                    </div>
                </div>
            @else
                {{ $slot }}
            @endauth
        </div>

        @livewireScripts
    </body>
</html>
