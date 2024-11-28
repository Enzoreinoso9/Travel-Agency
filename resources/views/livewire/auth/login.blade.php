<div class="min-h-screen flex">
    <!-- Lado izquierdo - Imagen de fondo con overlay -->
    <div class="hidden lg:flex lg:w-1/2 bg-cover bg-center relative" 
         style="background-image: url('{{ asset('images/tu-imagen.jpg') }}')">
        <div class="absolute inset-0 bg-emerald-900/50"></div>
        <div class="relative w-full flex items-center justify-center p-12">
            <div class="text-center text-white">
                <h1 class="text-4xl font-bold mb-4">Bienvenido a TuViaje</h1>
                <p class="text-xl">Tu destino para experiencias únicas</p>
            </div>
        </div>
    </div>

    <!-- Lado derecho - Formulario -->
    <div class="w-full lg:w-1/2 flex items-center justify-center bg-white p-8">
        <div class="w-full max-w-md">
            <!-- Logo o título -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Iniciar Sesión</h2>
                <p class="mt-2 text-sm text-gray-600">Ingresa a tu cuenta</p>
            </div>

            <!-- Formulario -->
            <form wire:submit.prevent="login" class="space-y-6">
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

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input wire:model="remember" id="remember" type="checkbox" 
                               class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">
                            Recordarme
                        </label>
                    </div>
                 
                </div>
                <!-- Submit Button -->
                <div>
                    <button type="submit" 
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                        Iniciar Sesión
                    </button>
                </div>

                <!-- Registro -->
                <div class="text-center">
                    <a href="{{ route('register') }}" 
                       class="text-sm text-gray-300 hover:text-white hover:underline">
                        ¿No tienes una cuenta? Regístrate
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
