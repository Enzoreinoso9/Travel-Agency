<div class="fixed inset-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-50"></div>
    <div class="modal-container bg-gray-800 w-11/12 md:w-2/5 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
        <div class="modal-header flex justify-between items-center p-4 border-b border-gray-700">
            <h5 class="modal-title text-white text-lg font-semibold">Editar Usuario</h5>
            <button type="button" wire:click="cerrarEditModal" class="text-gray-400 hover:text-gray-200">
                &times;
            </button>
        </div>
        <div class="modal-body p-4">
            <form wire:submit.prevent="updateRole">
                <div class="mb-3">
                    <label for="rol" class="form-label text-white">Rol</label>
                    <select wire:model="rol" class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white" required>
                        <option value="admin" {{ $rol === 'admin' ? 'selected' : '' }}>Administrador</option>
                        <option value="usuario" {{ $rol === 'usuario' ? 'selected' : '' }}>Usuario</option>
                    </select>
                </div>
                <div class="flex space-x-2">
                    <button type="submit" class="btn btn-primary flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar</button>
                    <button type="button" wire:click="cerrarEditModal" class="btn btn-secondary flex-1 bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div> 