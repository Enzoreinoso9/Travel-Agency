<div>
    @if (session()->has('message'))
        <div class="alert alert-success bg-green-500 text-white p-4 rounded-lg mb-4" role="alert" id="success-alert">
            {{ session('message') }}
            <button type="button" class="close" aria-label="Close" onclick="document.getElementById('success-alert').style.display='none'">
                &times;
            </button>
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger bg-red-500 text-white p-4 rounded-lg mb-4" role="alert" id="error-alert">
            {{ session('error') }}
            <button type="button" class="close" aria-label="Close" onclick="document.getElementById('error-alert').style.display='none'">
                &times;
            </button>
        </div>
    @endif

    <button wire:click="abrirCreateModal" class="btn btn-primary mb-4">Agregar Cliente</button>

    <!-- Modal -->
    @if ($isCreateModalOpen)
        @include('livewire.clientes.create-cliente-modal')
    @endif
    <!-- Modal -->
    @if ($isEditModalOpen)
        @include('livewire.clientes.edit-cliente-modal')
    @endif

    <div class="overflow-x-auto">
        <table class="table w-full">
            <thead>
                <tr>
                    <th class="bg-base-300">Nombre</th>
                    <th class="bg-base-300">Apellido</th>
                    <th class="bg-base-300">Documento</th>
                    <th class="bg-base-300">Email</th>
                    <th class="bg-base-300">Teléfono</th>
                    <th class="bg-base-300">Dirección</th>
                    <th class="bg-base-300">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellido }}</td>
                        <td>{{ $cliente->documento }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td class="flex space-x-2">
                            <button wire:click="abrirEditModal({{ $cliente->id_cliente }})" class="btn btn-secondary w-10 h-10 flex items-center justify-center">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button wire:click="delete({{ $cliente->id_cliente }})" class="btn btn-error w-10 h-10 flex items-center justify-center">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

