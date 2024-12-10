<div class="dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Registrar Venta</h2>

        @if (session()->has('message'))
            <div class="alert alert-success bg-green-500 text-white p-4 rounded-lg mb-4" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <button wire:click="abrirCreateModal" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg mb-4">Agregar Venta</button>

        @if ($isCreateModalOpen)
            @include('livewire.ventas.create-venta-modal')
        @endif

        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-6">Lista de Ventas</h3>
        <div class="overflow-x-auto">
            <table class="table w-full bg-white shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="p-2">Cliente</th>
                        <th class="p-2">Fecha de Venta</th>
                        <th class="p-2">Monto Total</th>
                        <th class="p-2">Estado de Pago</th>
                        <th class="p-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ventas as $venta)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-2">{{ $venta->cliente->nombre }}</td>
                            <td class="p-2">{{ $venta->fecha_venta }}</td>
                            <td class="p-2">{{ $venta->monto_total }}</td>
                            <td class="p-2">{{ $venta->estado_pago }}</td>
                            <td class="p-2 flex space-x-2">
                                <button wire:click="verDetalles({{ $venta->id_venta }})" class="w-8 h-8 flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white rounded-full" title="Ver Detalles">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="w-8 h-8 flex items-center justify-center bg-red-500 hover:bg-red-600 text-white rounded-full" title="Eliminar">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal de Detalles de Venta -->
        @if ($isDetailModalOpen)
            @include('livewire.ventas.detalle')
        @endif
    </div>
</div> 