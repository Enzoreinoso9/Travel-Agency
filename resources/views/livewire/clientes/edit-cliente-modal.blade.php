<div class="fixed inset-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-50"></div>
    <div class="modal-container bg-gray-800 w-11/12 md:w-2/5 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
        <div class="modal-header flex justify-between items-center p-4 border-b border-gray-700">
            <h5 class="modal-title text-white">Editar Datos del cliente</h5>
            <button type="button" wire:click="cerrarCreateModal" class="text-gray-400 hover:text-gray-200">
                &times;
            </button>
        </div>
        <div class="modal-body p-4">
            <form wire:submit.prevent="update">
                @include('livewire.clientes.cliente-form')
            </form>
        </div>
    </div>
</div>
