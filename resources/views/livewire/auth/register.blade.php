<div class="min-h-screen flex">
    <!-- Lado izquierdo - Imagen de fondo con overlay -->
    <div class="hidden lg:flex lg:w-1/2 bg-cover bg-center relative" 
         style="background-image: url('{{ asset('images/tu-imagen.jpg') }}')">
        <div class="absolute inset-0 bg-emerald-900/50"></div>
        <div class="relative w-full flex items-center justify-center p-12">
            <div class="text-center text-white">
                <h1 class="text-4xl font-bold mb-4">Únete a TuViaje</h1>
                <p class="text-xl">Comienza tu aventura con nosotros</p>
            </div>
        </div>
    </div>

    <!-- Lado derecho - Formulario -->
    <div class="w-full lg:w-1/2 flex items-center justify-center bg-white p-8">
        <div class="w-full max-w-md">
            <!-- Logo o título -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Crear Cuenta</h2>
                <p class="mt-2 text-sm text-gray-600">Regístrate para comenzar</p>
            </div>

            <!-- Formulario -->
            <form wire:submit.prevent="register" class="space-y-6">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        Nombre completo
                    </label>
                    <div class="mt-1">
                        <input wire:model="name" id="name" type="text" required 
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500">
                    </div>
                    @error('name') 
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Correo electrónico
                    </label>
                    <div class="mt-1">
                        <input wire:model="email" id="email" type="email" required 
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500">
                    </div>
                    @error('email') 
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Contraseña
                    </label>
                    <div class="mt-1">
                        <input wire:model="password" id="password" type="password" required 
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500">
                    </div>
                    @error('password') 
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Confirmation -->
                <div>
                    <label for="passwordConfirmation" class="block text-sm font-medium text-gray-700">
                        Confirmar contraseña
                    </label>
                    <div class="mt-1">
                        <input wire:model="passwordConfirmation" id="passwordConfirmation" type="password" required 
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500">
                    </div>
                </div>

                <!-- Terms -->
                <div class="flex items-center">
                    <input wire:model="terms" id="terms" type="checkbox" 
                           class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                    <label for="terms" class="ml-2 block text-sm text-gray-700">
                        Acepto los términos y condiciones
                    </label>
                </div>
                @error('terms') 
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror

                <!-- Submit Button -->
                <div>
                    <button type="submit" 
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                        Registrarse
                    </button>
                </div>
            </form>

            <!-- Login Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    ¿Ya tienes una cuenta?
                    <a href="{{ route('login') }}" class="font-medium text-emerald-600 hover:text-emerald-500">
                        Inicia sesión aquí
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">
@endpush
