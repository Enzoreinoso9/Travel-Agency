<div class="fixed inset-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-50"></div>
    <div class="modal-container bg-gray-800 w-11/12 md:w-1/3 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
        <div class="modal-header flex justify-between items-center p-4 border-b border-gray-700">
            <h2 class="text-2xl font-semibold text-white">Detalles de la Venta</h2>
            <button type="button" wire:click="cerrarDetailModal" class="text-gray-400 hover:text-gray-200">
                &times;
            </button>
        </div>
        <div class="modal-body p-4">
            <h3 class="text-xl font-semibold text-white">Cliente: {{ $venta->cliente->nombre }}</h3>
            <p class="text-white"><strong>Fecha de Venta:</strong> {{ $venta->fecha_venta }}</p>
            <p class="text-white"><strong>Monto Total:</strong> {{ $venta->monto_total }}</p>
            <p class="text-white"><strong>Estado de Pago:</strong> {{ $venta->estado_pago }}</p>

            <h4 class="text-lg font-semibold text-white mt-4">Detalles de la Venta</h4>
            <ul class="list-disc pl-5 text-white">
                @if($venta->detalles->id_paquete)
                    <li><strong>Paquete Turístico:</strong> {{ $venta->detalles->nombre_paquete }}</li>
                @endif
                @if($venta->detalles->id_pasaje)
                    <li><strong>Pasaje:</strong> {{ $venta->detalles->nombre_pasaje }}</li>
                @endif
                @if($venta->detalles->id_vuelo)
                    <li><strong>Vuelo:</strong> {{ $venta->detalles->nombre_vuelo }}</li>
                @endif
            </ul>
                    
            
        </div>
    </div>
</div> 