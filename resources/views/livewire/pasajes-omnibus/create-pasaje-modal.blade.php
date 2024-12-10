<div class="fixed inset-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-50"></div>
    <div class="modal-container bg-gray-800 w-11/12 md:w-2/5 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
        <div class="modal-header flex justify-between items-center p-4 border-b border-gray-700">
            <h5 class="modal-title text-white text-lg font-semibold">Crear Pasaje de Omnibus</h5>
            <button type="button" wire:click="cerrarCreateModal" class="text-gray-400 hover:text-gray-200">
                &times;
            </button>
        </div>
        <div class="modal-body p-4">
            <form wire:submit.prevent="create">
                <div class="mb-3">
                    <label for="empresa_transporte" class="form-label text-white">Empresa de Transporte</label>
                    <input type="text" wire:model="empresa_transporte" class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white" required>
                </div>
                <div class="mb-3">
                    <label for="origen" class="form-label text-white">Origen</label>
                    <input type="text" wire:model="origen" class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white" required>
                </div>
                <div class="mb-3">
                    <label for="destino" class="form-label text-white">Destino</label>
                    <input type="text" wire:model="destino" class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white" required>
                </div>
                <div class="mb-3">
                    <label for="fecha_salida" class="form-label text-white">Fecha Salida</label>
                    <input type="datetime-local" wire:model="fecha_salida" class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white" required>
                </div>
                <div class="mb-3">
                    <label for="fecha_llegada" class="form-label text-white">Fecha Llegada</label>
                    <input type="datetime-local" wire:model="fecha_llegada" class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white" required>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label text-white">Precio</label>
                    <input type="number" wire:model="precio" class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white" required>
                </div>
                <div class="mb-3">
                    <label for="disponibilidad" class="form-label text-white">Disponibilidad</label>
                    <input type="number" wire:model="disponibilidad" class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white" required>
                </div>
                <div class="flex space-x-2">
                    <button type="submit" class="btn btn-primary flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Aceptar</button>
                    <button type="button" wire:click="cerrarCreateModal" class="btn btn-secondary flex-1 bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
