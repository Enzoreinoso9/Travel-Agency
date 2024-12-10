<div class="fixed inset-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-50"></div>
    <div class="modal-container bg-gray-800 w-11/12 md:w-2/5 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
        <div class="modal-header flex justify-between items-center p-4 border-b border-gray-700">
            <h5 class="modal-title text-white text-lg font-semibold">Crear Usuario</h5>
            <button type="button" wire:click="cerrarCreateModal" class="text-gray-400 hover:text-gray-200">
                &times;
            </button>
        </div>
        <div class="modal-body p-4">
            <form wire:submit.prevent="create">
                <div class="mb-3">
                    <label for="nombre_usuario" class="form-label text-white">Nombre de Usuario</label>
                    <input type="text" wire:model="nombre_usuario" class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-white">Email</label>
                    <input type="email" wire:model="email" class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-white">Contraseña</label>
                    <input type="password" wire:model="password" class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white" required>
                </div>
                <div class="flex space-x-2">
                    <button type="submit" class="btn btn-primary flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear</button>
                    <button type="button" wire:click="cerrarCreateModal" class="btn btn-secondary flex-1 bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>