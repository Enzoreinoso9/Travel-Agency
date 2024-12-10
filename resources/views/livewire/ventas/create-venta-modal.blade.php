<div class="fixed inset-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-50"></div>
    <div class="modal-container bg-gray-800 w-11/12 md:w-1/3 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
        <div class="modal-header flex justify-between items-center p-4 border-b border-gray-700">
            <h3 class="text-lg font-semibold text-white">Paso {{ $step }} de 2</h3>
            <button type="button" wire:click="cerrarCreateModal" class="text-gray-400 hover:text-gray-200">
                &times;
            </button>
        </div>
        <div class="modal-body p-4">
            <form wire:submit.prevent="nextStep">
                @if ($step === 1)
                    <div class="mb-4">
                        <label for="id_cliente" class="text-white">Cliente</label>
                        <select wire:model="id_cliente" required class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white">
                            <option value="">Seleccione un cliente</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id_cliente }}">{{ $cliente->nombre }}</option>
                            @endforeach
                        </select>
                        @error('id_cliente') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="fecha_venta" class="text-white">Fecha de Venta</label>
                        <input type="date" wire:model="fecha_venta" required class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white">
                        @error('fecha_venta') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="monto_total" class="text-white">Monto Total</label>
                        <input type="number" wire:model="monto_total" required class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white" min="1">
                        @error('monto_total') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                @else
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" wire:model="selectPaquete" id="selectPaquete" class="mr-2" />
                        <label for="selectPaquete" class="text-white">Incluir Paquete</label>
                    </div>
                    <div class="mb-4">
                        <label for="id_paquete" class="text-white">Paquete</label>
                        <select wire:model="id_paquete" @if(!$selectPaquete) disabled @endif class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white">
                            <option value="">Seleccione un paquete</option>
                            @foreach ($paquetes as $paquete)
                                <option value="{{ $paquete->id_paquete }}">{{ $paquete->nombre }}</option>
                            @endforeach
                        </select>
                        @error('id_paquete') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" wire:model="selectPasaje" id="selectPasaje" class="mr-2" />
                        <label for="selectPasaje" class="text-white">Incluir Pasaje</label>
                    </div>
                    <div class="mb-4">
                        <label for="id_pasaje" class="text-white">Pasaje</label>
                        <select wire:model="id_pasaje" @if(!$selectPasaje) disabled @endif class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white">
                            <option value="">Seleccione un pasaje</option>
                            @foreach ($pasajes as $pasaje)
                                <option value="{{ $pasaje->id_pasaje }}" @if($selectPasaje) selected @endif>{{ $pasaje->nombre }}</option>
                            @endforeach
                        </select>
                        @error('id_pasaje') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" wire:model="selectVuelo" id="selectVuelo" class="mr-2" />
                        <label for="selectVuelo" class="text-white">Incluir Vuelo</label>
                    </div>
                    <div class="mb-4">
                        <label for="id_vuelo" class="text-white">Vuelo</label>
                        <select wire:model="id_vuelo" @if(!$selectVuelo) disabled @endif class="input input-bordered w-full p-2 rounded border border-gray-600 bg-gray-700 text-white">
                            <option value="">Seleccione un vuelo</option>
                            @foreach ($vuelos as $vuelo)
                                <option value="{{ $vuelo->id_vuelo }}" @if($selectVuelo) selected @endif>{{ $vuelo->nombre }}</option>
                            @endforeach
                        </select>
                        @error('id_vuelo') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                @endif
                <div class="flex justify-between mt-4">
                    @if ($step > 1)
                        <button type="button" wire:click="$set('step', 1)" class="bg-gray-500 text-white py-2 px-4 rounded">Anterior</button>
                    @endif
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">{{ $step === 1 ? 'Siguiente' : 'Registrar Venta' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

