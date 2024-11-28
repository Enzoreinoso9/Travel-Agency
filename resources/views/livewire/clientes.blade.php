@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Teléfono: (Opcional)</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            wire:model="telefono" maxlength="50">
        @error('telefono')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Dirección: (Opcional)</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            wire:model="direccion">
        @error('direccion')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    @endsection
