<div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md">
    <div class="mb-3">
        <label for="nombre" class="form-label text-gray-700 dark:text-gray-300">Nombre</label>
        <input type="text" wire:model="nombre" placeholder="Ej: Juan" class="form-control w-full rounded border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 py-2 px-3" required>
        @error('nombre')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label text-gray-700 dark:text-gray-300">Apellido</label>
        <input type="text" wire:model="apellido" placeholder="Ej: Pérez" class="form-control w-full rounded border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 py-2 px-3" required>
        @error('apellido')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="documento" class="form-label text-gray-700 dark:text-gray-300">Documento</label>
        <input type="text" wire:model="documento" placeholder="Ej: 12345678" class="form-control w-full rounded border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 py-2 px-3" maxlength="8" required>
        @error('documento')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label text-gray-700 dark:text-gray-300">Email</label>
        <input type="email" wire:model="email" placeholder="Ej: juan.perez@example.com" class="form-control w-full rounded border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 py-2 px-3" required>
        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label text-gray-700 dark:text-gray-300">Teléfono</label>
        <input type="text" wire:model="telefono" placeholder="Ej: 1234567890" class="form-control w-full rounded border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 py-2 px-3" maxlength="10" required>
        @error('telefono')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label text-gray-700 dark:text-gray-300">Dirección</label>
        <input type="text" wire:model="direccion" placeholder="Ej: Calle Falsa 123" class="form-control w-full rounded border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 py-2 px-3" required>
        @error('direccion')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex justify-end space-x-2">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-200">Aceptar</button>
        <button type="button" wire:click="cerrarCreateModal" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded transition duration-200">Cancelar</button>
    </div>
</div>
