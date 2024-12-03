<div class="dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
            Paquetes Turisticos
        </h2>
    @if (session()->has('message'))
        <div class="alert alert-success bg-green-500 text-white p-4 rounded-lg mb-4" role="alert" id="success-alert">
            {{ session('message') }}
            <button type="button" class="close" aria-label="Close" onclick="document.getElementById('success-alert').style.display='none'">
                &times;
            </button>
        </div>
    @endif

    <button wire:click="abrirCreateModal" class="btn btn-primary mb-4 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar Paquete Turístico</button>

    <!-- Modal para crear paquete -->
    @if ($isCreateModalOpen)
        @include('livewire.paquetes.create-paquete-modal')
    @endif

    <!-- Modal para editar paquete -->
    @if ($isEditModalOpen)
        @include('livewire.paquetes.edit-paquete-modal')
    @endif

    <div class="overflow-x-auto">
        <table class="table w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="p-2">Origen</th>
                    <th class="p-2">Destino</th>
                    <th class="p-2">Fecha Vuelo</th>
                    <th class="p-2">Hora Salida</th>
                    <th class="p-2">Estado</th>
                    <th class="p-2">Capacidad</th>
                    <th class="p-2">Asientos Disponibles</th>
                    <th class="p-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paquetes as $paquete)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="p-2">{{ $paquete->origen }}</td>
                        <td class="p-2">{{ $paquete->destino }}</td>
                        <td class="p-2">{{ $paquete->fecha_vuelo }}</td>
                        <td class="p-2">{{ $paquete->hora_salida }}</td>
                        <td class="p-2">{{ $paquete->estado }}</td>
                        <td class="p-2">{{ $paquete->capacidad }}</td>
                        <td class="p-2">{{ $paquete->asientos_disponibles }}</td>
                        <td class="p-2 flex space-x-2">
                            <button wire:click="abrirEditModal({{ $paquete->id_paquete }})" class="w-8 h-8 flex items-center justify-center bg-yellow-500 hover:bg-yellow-600 text-white rounded-full">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button wire:click="delete({{ $paquete->id_paquete }})" class="w-8 h-8 flex items-center justify-center bg-red-500 hover:bg-red-600 text-white rounded-full">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
