<div class="fixed inset-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-50"></div>
    <div class="modal-container bg-gray-800 w-11/12 md:w-1/4 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
        <div class="modal-header flex justify-between items-center p-4 border-b border-gray-700">
            <h5 class="modal-title text-white">Crear Paquete Turístico</h5>
            <button type="button" wire:click="cerrarCreateModal" class="text-gray-400 hover:text-gray-200">
                &times;
            </button>
        </div>
        <div class="modal-body p-4">
            <form wire:submit.prevent="insertar">
                <div class="mb-3">
                    <label for="origen" class="form-label text-white">Origen</label>
                    <input type="text" wire:model="origen" class="input input-bordered w-full" required>
                </div>
                <div class="mb-3">
                    <label for="destino" class="form-label text-white">Destino</label>
                    <input type="text" wire:model="destino" class="input input-bordered w-full" required>
                </div>
                <div class="mb-3">
                    <label for="fecha_vuelo" class="form-label text-white">Fecha Vuelo</label>
                    <input type="date" wire:model="fecha_vuelo" class="input input-bordered w-full" required>
                </div>
                <div class="mb-3">
                    <label for="hora_salida" class="form-label text-white">Hora Salida</label>
                    <input type="time" wire:model="hora_salida" class="input input-bordered w-full" required>
                </div>
                <div class="mb-3">
                    <label for="estado" class="form-label text-white">Estado</label>
                    <input type="text" wire:model="estado" class="input input-bordered w-full" required>
                </div>
                <div class="mb-3">
                    <label for="capacidad" class="form-label text-white">Capacidad</label>
                    <input type="number" wire:model="capacidad" class="input input-bordered w-full" required>
                </div>
                <div class="mb-3">
                    <label for="asientos_disponibles" class="form-label text-white">Asientos Disponibles</label>
                    <input type="number" wire:model="asientos_disponibles" class="input input-bordered w-full" required>
                </div>
                <div class="flex space-x-2">
                    <button type="submit" class="btn btn-primary flex-1">Aceptar</button>
                    <button type="button" wire:click="cerrarCreateModal" class="btn btn-secondary flex-1">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div> 