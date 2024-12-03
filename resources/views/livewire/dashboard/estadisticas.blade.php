<div class="py-6 bg-gray-800 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
            Dashboard
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <!-- Tarjeta de Ventas -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl rounded-lg p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-emerald-500 bg-opacity-75">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Ventas Totales</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-white">${{ number_format($totalVentas, 2) }}</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta de Clientes -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl rounded-lg p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-500 bg-opacity-75">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Clientes Totales</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-white">248</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta de Vuelos -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl rounded-lg p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-purple-500 bg-opacity-75">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Vuelos Activos</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-white">35</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta de Paquetes -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl rounded-lg p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-yellow-500 bg-opacity-75">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Paquetes Vendidos</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-white">124</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráficos o contenido adicional aquí -->
    </div>
</div>
