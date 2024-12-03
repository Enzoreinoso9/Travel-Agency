<nav class="bg-emerald-800">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div x-data="{ open: true }" 
             class="flex flex-col fixed h-screen w-64 bg-emerald-800 text-white transition-all duration-300"
             :class="{'w-64': open, 'w-20': !open}">
            
            <!-- Toggle Button -->
            <button @click="open = !open" 
                    class="absolute right-0 top-3 transform translate-x-full bg-emerald-800 text-white p-2 rounded-r-md">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </button>

            <!-- Logo -->
            <div class="flex items-center justify-center h-16 bg-emerald-900">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="h-8 w-auto">
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1 overflow-y-auto">
                <ul class="p-2 space-y-2">
                    <!-- Dashboard -->
                    <li>
                        <a href="{{ route('dashboard') }}" 
                           class="flex items-center p-2 rounded-lg hover:bg-emerald-700 {{ request()->routeIs('dashboard') ? 'bg-emerald-900' : '' }}">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            <span class="ml-3" x-show="open">Dashboard</span>
                        </a>
                    </li>

                    <!-- Clientes -->
                    <li>
                        <a href="{{ route('clientes') }}" 
                           class="flex items-center p-2 rounded-lg hover:bg-emerald-700 {{ request()->routeIs('clientes') ? 'bg-emerald-900' : '' }}">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            <span class="ml-3" x-show="open">Clientes</span>
                        </a>
                    </li>

                    <!-- Ventas -->
                    <li>
                        <a href="{{ route('ventas') }}" 
                           class="flex items-center p-2 rounded-lg hover:bg-emerald-700 {{ request()->routeIs('ventas') ? 'bg-emerald-900' : '' }}">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="ml-3" x-show="open">Ventas</span>
                        </a>
                    </li>

                    <!-- Vuelos -->
                    <li>
                        <a href="{{ route('vuelos') }}" 
                           class="flex items-center p-2 rounded-lg hover:bg-emerald-700 {{ request()->routeIs('vuelos') ? 'bg-emerald-900' : '' }}">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            <span class="ml-3" x-show="open">Vuelos</span>
                        </a>
                    </li>

                    <!-- Paquetes Turísticos -->
                    <li>
                        <a href="{{ route('paquetes') }}" 
                           class="flex items-center p-2 rounded-lg hover:bg-emerald-700 {{ request()->routeIs('paquetes') ? 'bg-emerald-900' : '' }}">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            <span class="ml-3" x-show="open">Paquetes Turísticos</span>
                        </a>
                    </li>

                    <!-- Pasajes de Ómnibus -->
                    <li>
                        <a href="{{ route('pasajes') }}" 
                           class="flex items-center p-2 rounded-lg hover:bg-emerald-700 {{ request()->routeIs('pasajes') ? 'bg-emerald-900' : '' }}">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/>
                            </svg>
                            <span class="ml-3" x-show="open">Pasajes de Ómnibus</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- User Profile -->
            <div class="border-t border-emerald-700">
                <div class="flex items-center p-4 bg-emerald-900">
                    @auth
                        <div class="dropdown dropdown-end">
                            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                                <div class="w-10 rounded-full">
                                    <img src="{{ Auth::user()->profile_photo_url }}" alt="profile" />
                                </div>
                            </label>
                            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-white dark:bg-gray-700 rounded-box w-52">
                                <li><a href="{{ route('profile.edit') }}" class="text-gray-700 dark:text-white">Editar</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" 
                                           onclick="event.preventDefault(); this.closest('form').submit();"
                                           class="text-gray-700 dark:text-white">
                                            Salir
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-ghost text-white">Iniciar Sesión</a>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-64 p-8">
            @yield('content')
        </div>
    </div>
</nav>
