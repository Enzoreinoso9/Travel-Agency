<div>
    @if (session()->has('message'))
        <div class="alert alert-success bg-green-500 text-white p-4 rounded-lg mb-4" role="alert" id="success-alert">
            {{ session('message') }}
            <button type="button" class="close" aria-label="Close" onclick="document.getElementById('success-alert').style.display='none'">
                &times;
            </button>
        </div>
    @endif

    <button wire:click="abrirCreateModal" class="btn btn-primary mb-4">Agregar Paquete Turístico</button>

    <!-- Modal para crear paquete -->
    @if ($isCreateModalOpen)
        @include('livewire.paquete-turistico.create-paquete-modal')
    @endif

    <!-- Modal para editar paquete -->
    @if ($isEditModalOpen)
        @include('livewire.paquete-turistico.edit-paquete-modal')
    @endif

    <div class="overflow-x-auto">
        <table class="table w-full">
            <thead>
                <tr>
                    <th class="bg-base-300">Origen</th>
                    <th class="bg-base-300">Destino</th>
                    <th class="bg-base-300">Fecha Vuelo</th>
                    <th class="bg-base-300">Hora Salida</th>
                    <th class="bg-base-300">Estado</th>
                    <th class="bg-base-300">Capacidad</th>
                    <th class="bg-base-300">Asientos Disponibles</th>
                    <th class="bg-base-300">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paquetes as $paquete)
                    <tr>
                        <td>{{ $paquete->origen }}</td>
                        <td>{{ $paquete->destino }}</td>
                        <td>{{ $paquete->fecha_vuelo }}</td>
                        <td>{{ $paquete->hora_salida }}</td>
                        <td>{{ $paquete->estado }}</td>
                        <td>{{ $paquete->capacidad }}</td>
                        <td>{{ $paquete->asientos_disponibles }}</td>
                        <td class="flex space-x-2">
                            <button wire:click="abrirEditModal({{ $paquete->id_paquete }})" class="btn btn-secondary w-10 h-10 flex items-center justify-center">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button wire:click="delete({{ $paquete->id_paquete }})" class="btn btn-error w-10 h-10 flex items-center justify-center">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
