<li>
    <x-nav-link :href="route('clientes')" :active="request()->routeIs('clientes')"
        class="flex items-center p-3 text-white rounded-lg hover:bg-emerald-700 group">
        <svg class="w-5 h-5 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
        </svg>
        <span class="ml-3" x-show="sidebarOpen">Clientes</span>
    </x-nav-link>
</li>

<li>
    <x-nav-link :href="route('ventas')" :active="request()->routeIs('ventas')"
        class="flex items-center p-3 text-white rounded-lg hover:bg-emerald-700 group">
        <svg class="w-5 h-5 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        <span class="ml-3" x-show="sidebarOpen">Ventas</span>
    </x-nav-link>
</li>

<li>
    <x-nav-link :href="route('vuelos')" :active="request()->routeIs('vuelos')"
        class="flex items-center p-3 text-white rounded-lg hover:bg-emerald-700 group">
        <svg class="w-5 h-5 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
        </svg>
        <span class="ml-3" x-show="sidebarOpen">Vuelos</span>
    </x-nav-link>
</li>

<li>
    <x-nav-link :href="route('paquetes')" :active="request()->routeIs('paquetes')"
        class="flex items-center p-3 text-white rounded-lg hover:bg-emerald-700 group">
        <svg class="w-5 h-5 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
        </svg>
        <span class="ml-3" x-show="sidebarOpen">Paquetes</span>
    </x-nav-link>
</li>

<li>
    <x-nav-link :href="route('pasajes-omnibus')" :active="request()->routeIs('pasajes')"
        class="flex items-center p-3 text-white rounded-lg hover:bg-emerald-700 group">
        <svg class="w-5 h-5 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/>
        </svg>
        <span class="ml-3" x-show="sidebarOpen">Pasajes</span>
    </x-nav-link>
</li>

<!-- Enlace para Usuarios, visible solo para administradores -->
@if(auth()->user()->rol === 'admin')
<li>
    <x-nav-link :href="route('usuarios')" :active="request()->routeIs('usuarios')"
        class="flex items-center p-3 text-white rounded-lg hover:bg-emerald-700 group">
        <svg class="w-5 h-5 transition duration-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M12 4a2 2 0 00-2 2v1a2 2 0 00-2 2v1a2 2 0 00-2 2v1a2 2 0 002 2h8a2 2 0 002-2v-1a2 2 0 00-2-2v-1a2 2 0 00-2-2V6a2 2 0 00-2-2z"/>
        </svg>
        <span class="ml-3" x-show="sidebarOpen">Usuarios</span>
    </x-nav-link>
</li>
@endif

