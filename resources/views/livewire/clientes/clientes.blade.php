<div class="dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
            Clientes
        </h2>

        @if (session()->has('message'))
            <div class="alert alert-success bg-green-500 text-white p-4 rounded-lg mb-4" role="alert" id="success-alert">
                {{ session('message') }}
                <button type="button" class="close" aria-label="Close"
                    onclick="document.getElementById('success-alert').style.display='none'">
                    &times;
                </button>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger bg-red-500 text-white p-4 rounded-lg mb-4" role="alert" id="error-alert">
                {{ session('error') }}
                <button type="button" class="close" aria-label="Close"
                    onclick="document.getElementById('error-alert').style.display='none'">
                    &times;
                </button>
            </div>
        @endif

        <button wire:click="abrirCreateModal"
            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg mb-4">Agregar
            Cliente</button>

        <!-- Modal -->
        @if ($isCreateModalOpen)
            @include('livewire.clientes.create-cliente-modal')
        @endif
        <!-- Modal -->
        @if ($isEditModalOpen)
            @include('livewire.clientes.edit-cliente-modal')
        @endif

        <div class="overflow-x-auto">
            <table class="table w-full bg-white shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="p-2">Nombre</th>
                        <th class="p-2">Apellido</th>
                        <th class="p-2">Documento</th>
                        <th class="p-2">Email</th>
                        <th class="p-2">Teléfono</th>
                        <th class="p-2">Dirección</th>
                        <th class="p-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-2">{{ $cliente->nombre }}</td>
                            <td class="p-2">{{ $cliente->apellido }}</td>
                            <td class="p-2">{{ $cliente->documento }}</td>
                            <td class="p-2">{{ $cliente->email }}</td>
                            <td class="p-2">{{ $cliente->telefono }}</td>
                            <td class="p-2">{{ $cliente->direccion }}</td>
                            <td class="p-2 flex space-x-2">
                                <button wire:click="abrirEditModal({{ $cliente->id_cliente }})"
                                    class="w-8 h-8 flex items-center justify-center bg-yellow-500 hover:bg-yellow-600 text-white rounded-full">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button wire:click="delete({{ $cliente->id_cliente }})"
                                    class="w-8 h-8 flex items-center justify-center bg-red-500 hover:bg-red-600 text-white rounded-full">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Paginación -->
        <div class="mt-4">
            {{ $clientes->links() }} <!-- Esto debe funcionar si $clientes es un objeto de paginación -->
        </div>
    </div>
</div>
