<div>
    @if (session()->has('message'))
        <div class="alert alert-success bg-green-500 text-white p-4 rounded-lg mb-4" role="alert" id="success-alert">
            {{ session('message') }}
            <button type="button" class="close" aria-label="Close" onclick="document.getElementById('success-alert').style.display='none'">
                &times;
            </button>
        </div>
    @endif

    <button wire:click="abrirCreateModal" class="btn btn-primary mb-4 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar Usuario</button>

    <!-- Modal para crear usuario -->
    @if ($isCreateModalOpen)
        @include('livewire.usuarios.create-usuario-modal')
    @endif

    <!-- Modal para editar usuario -->
    @if ($isEditModalOpen)
        @include('livewire.usuarios.edit-usuario-modal')
    @endif

    <div class="overflow-x-auto">
        <table class="table w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="p-2">Nombre de Usuario</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Rol</th>
                    <th class="p-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="p-2">{{ $usuario->nombre_usuario }}</td>
                        <td class="p-2">{{ $usuario->email }}</td>
                        <td class="p-2">{{ $usuario->rol }}</td>
                        <td class="p-2 flex space-x-2">
                            <button wire:click="abrirEditModal({{ $usuario->id_usuario }})" class="w-8 h-8 flex items-center justify-center bg-yellow-500 hover:bg-yellow-600 text-white rounded-full">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button wire:click="delete({{ $usuario->id_usuario }})" class="w-8 h-8 flex items-center justify-center bg-red-500 hover:bg-red-600 text-white rounded-full">
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
        {{ $usuarios->links() }} <!-- Enlaces de paginación -->
    </div>
</div> 