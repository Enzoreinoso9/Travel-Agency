<div class="p-6 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-6">Estadísticas</h2>

    <!-- Estadísticas de Ventas -->
    <div class="mb-8">
        <h3 class="text-xl font-semibold mb-4">Ventas de Paquetes</h3>
        <div class="flex space-x-4 mb-4">
            <button wire:click="$set('periodoVentas', 'semana')" 
                    class="px-4 py-2 rounded {{ $periodoVentas === 'semana' ? 'bg-green-600 text-white' : 'bg-gray-200' }}">
                Semana
            </button>
            <button wire:click="$set('periodoVentas', 'mes')"
                    class="px-4 py-2 rounded {{ $periodoVentas === 'mes' ? 'bg-green-600 text-white' : 'bg-gray-200' }}">
                Mes
            </button>
            <button wire:click="$set('periodoVentas', 'año')"
                    class="px-4 py-2 rounded {{ $periodoVentas === 'año' ? 'bg-green-600 text-white' : 'bg-gray-200' }}">
                Año
            </button>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg grid grid-cols-3 gap-4">
            <div>
                <p class="text-4xl font-bold text-green-600">{{ $estadisticas['ventas']['total'] }}</p>
                <p class="text-gray-600">Paquetes vendidos</p>
            </div>
            <div>
                <p class="text-4xl font-bold text-green-600">S/. {{ number_format($estadisticas['ventas']['monto_total'], 2) }}</p>
                <p class="text-gray-600">Monto total</p>
            </div>
            <div>
                <p class="text-4xl font-bold text-green-600">{{ $estadisticas['ventas']['disponibles'] }}</p>
                <p class="text-gray-600">Paquetes disponibles</p>
            </div>
        </div>
    </div>

    <!-- Estadísticas de Vuelos -->
    <div>
        <h3 class="text-xl font-semibold mb-4">Vuelos Realizados</h3>
        <div class="flex space-x-4 mb-4">
            <button wire:click="$set('periodoVuelos', 'mes')"
                    class="px-4 py-2 rounded {{ $periodoVuelos === 'mes' ? 'bg-green-600 text-white' : 'bg-gray-200' }}">
                Mes
            </button>
            <button wire:click="$set('periodoVuelos', 'año')"
                    class="px-4 py-2 rounded {{ $periodoVuelos === 'año' ? 'bg-green-600 text-white' : 'bg-gray-200' }}">
                Año
            </button>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg">
            <p class="text-4xl font-bold text-green-600">{{ $estadisticas['vuelos'] }}</p>
            <p class="text-gray-600">Vuelos realizados</p>
        </div>
    </div>
</div>
