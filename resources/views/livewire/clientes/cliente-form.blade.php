<div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" wire:model="nombre" placeholder="Ej: Juan" class="input input-bordered w-full" required>
        @error('nombre')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" wire:model="apellido" placeholder="Ej: Pérez" class="input input-bordered w-full" required>
        @error('apellido')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="documento" class="form-label">Documento</label>
        <input type="text" wire:model="documento" placeholder="Ej: 12345678" class="input input-bordered w-full" maxlength="8"  required>
        @error('documento')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" wire:model="email" placeholder="Ej: juan.perez@example.com" class="input input-bordered w-full" required>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" wire:model="telefono" placeholder="Ej: 1234567890" class="input input-bordered w-full" maxlength="10" required>
        @error('telefono')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" wire:model="direccion" placeholder="Ej: Calle Falsa 123" class="input input-bordered w-full" required>
        @error('direccion')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex space-x-2">
        <button type="submit" class="btn btn-primary flex-1">Aceptar</button>
        <button type="button" wire:click="cerrarCreateModal" class="btn btn-secondary flex-1">Cancelar</button>
    </div>
</div>
