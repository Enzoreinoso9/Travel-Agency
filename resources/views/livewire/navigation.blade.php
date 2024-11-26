<div class="{{ $darkMode ? 'dark' : '' }}">
    {{-- Navbar --}}
    <div class="navbar bg-green-900 dark:bg-gray-800 fixed top-0 right-0 left-0 z-30">
        <div class="navbar-start">
            {{-- Botón hamburguesa para móvil --}}
            <div class="lg:hidden">
                <button class="btn btn-ghost btn-circle" wire:click="toggleSidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <a href="{{ route('inicio') }}" class="btn btn-ghost text-xl text-white">Travel Agency</a>
        </div>

        <div class="navbar-end gap-2">
            {{-- Botón Dark Mode --}}
            <button class="btn btn-ghost btn-circle" wire:click="toggleDarkMode">
                @if($darkMode)
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                @endif
            </button>

            {{-- Menú de usuario --}}
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
        </div>
    </div>

    {{-- Sidebar --}}
    <div class="fixed top-0 left-0 h-screen w-60 bg-green-900 dark:bg-gray-800 transform transition-transform duration-200 ease-in-out lg:translate-x-0 {{ $isSidebarOpen ? 'translate-x-0' : '-translate-x-full' }} lg:static z-40">
        <div class="pt-16"> {{-- Añadido padding-top para evitar que el contenido quede detrás del navbar --}}
            <div class="text-white text-2xl font-bold p-4">Menú</div>
            <nav class="flex-1">
                <ul class="space-y-4 text-white">
                    <li>
                        <a href="{{ route('clientes') }}" class="block px-4 py-2 hover:bg-green-700 dark:hover:bg-gray-700 transition-colors">
                            <i class="fas fa-users mr-2"></i> Clientes
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('proveedores') }}" class="block px-4 py-2 hover:bg-green-700 dark:hover:bg-gray-700 transition-colors">
                            <i class="fas fa-truck mr-2"></i> Proveedores
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pagos') }}" class="block px-4 py-2 hover:bg-green-700 dark:hover:bg-gray-700 transition-colors">
                            <i class="fas fa-credit-card mr-2"></i> Pagos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('reservas') }}" class="block px-4 py-2 hover:bg-green-700 dark:hover:bg-gray-700 transition-colors">
                            <i class="fas fa-calendar-alt mr-2"></i> Reservas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('itinerarios') }}" class="block px-4 py-2 hover:bg-green-700 dark:hover:bg-gray-700 transition-colors">
                            <i class="fas fa-map-marked-alt mr-2"></i> Itinerarios
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('soporte') }}" class="block px-4 py-2 hover:bg-green-700 dark:hover:bg-gray-700 transition-colors">
                            <i class="fas fa-headset mr-2"></i> Soporte
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    {{-- Overlay para cerrar el sidebar en móvil --}}
    @if($isSidebarOpen)
        <div class="fixed inset-0 bg-black bg-opacity-50 lg:hidden z-30" wire:click="toggleSidebar"></div>
    @endif
</div>
