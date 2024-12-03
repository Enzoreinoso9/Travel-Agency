
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

        <button wire:click="abrirCreateModal" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg mb-4">Agregar Cliente</button>

        <!-- Modal -->
        @if ($isCreateModalOpen)
            @include('livewire.clientes.create-cliente-modal')
        @endif
        <!-- Modal -->
        @if ($isEditModalOpen)
            @include('livewire.clientes.edit-cliente-modal')
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 rounded-lg shadow-lg">
                <thead class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-300">
                    <tr>
                        <th class="p-3 text-left text-sm font-semibold">Nombre</th>
                        <th class="p-3 text-left text-sm font-semibold">Apellido</th>
                        <th class="p-3 text-left text-sm font-semibold">Documento</th>
                        <th class="p-3 text-left text-sm font-semibold">Email</th>
                        <th class="p-3 text-left text-sm font-semibold">Teléfono</th>
                        <th class="p-3 text-left text-sm font-semibold">Dirección</th>
                        <th class="p-3 text-left text-sm font-semibold">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 transition duration-200">
                            <td class="p-3 text-sm text-gray-800 dark:text-gray-200">{{ $cliente->nombre }}</td>
                            <td class="p-3 text-sm text-gray-800 dark:text-gray-200">{{ $cliente->apellido }}</td>
                            <td class="p-3 text-sm text-gray-800 dark:text-gray-200">{{ $cliente->documento }}</td>
                            <td class="p-3 text-sm text-gray-800 dark:text-gray-200">{{ $cliente->email }}</td>
                            <td class="p-3 text-sm text-gray-800 dark:text-gray-200">{{ $cliente->telefono }}</td>
                            <td class="p-3 text-sm text-gray-800 dark:text-gray-200">{{ $cliente->direccion }}</td>
                            <td class="flex space-x-2 p-3">
                                <button wire:click="abrirEditModal({{ $cliente->id_cliente }})"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold w-10 h-10 flex items-center justify-center rounded-lg shadow">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button wire:click="delete({{ $cliente->id_cliente }})"
                                    class="bg-red-500 hover:bg-red-600 text-white font-bold w-10 h-10 flex items-center justify-center rounded-lg shadow">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

