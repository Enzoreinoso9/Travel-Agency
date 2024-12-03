<div class="min-h-screen flex relative">
    <!-- Fondo con imagen -->
    <div class="fixed inset-0 z-0">
        <img src="{{ asset('images/background.jpg') }}" 
             class="h-full w-full object-cover"
             alt="Background">
    </div>
    
    <!-- Espaciador izquierdo -->
    <div class="hidden lg:block lg:flex-1"></div>
    
    <!-- Contenedor del formulario -->
    <div class="absolute right-0 top-0 w-full lg:w-1/3 h-full
                bg-emerald-600/70 dark:bg-emerald-800/70 backdrop-blur-sm">
        <div class="h-full flex items-center justify-center">
            
            <div class="w-full max-w-md p-8">
                <!-- Logo -->
                <div class="flex justify-center mb-8">
                    <img src="{{ asset('images/logo.svg') }}" 
                         alt="Logo" 
                         class="h-12 w-auto">
                </div>

                <!-- Título y subtítulo -->
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-white">
                        {{ __('Welcome back') }}
                    </h2>
                    <p class="mt-2 text-sm text-white/80">
                        {{ __('Please sign in to your account') }}
                    </p>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form wire:submit.prevent="login" class="mt-8 space-y-6">
                    <div class="space-y-5">
                        <div>
                            <x-input-label for="email" :value="__('Email')" class="text-white" />
                            <x-text-input wire:model.defer="email" 
                                id="email" 
                                class="mt-1 block w-full rounded-md border border-white/20 bg-white/10 
                                       text-white placeholder-white/70 focus:border-white 
                                       focus:ring focus:ring-white/50 transition duration-200 ease-in-out 
                                       shadow-md hover:shadow-lg p-2" 
                                type="email" 
                                name="email" 
                                required 
                                autofocus 
                                autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="password" :value="__('Password')" class="text-white" />
                            <x-text-input wire:model.defer="password" 
                                id="password" 
                                class="mt-1 block w-full rounded-md border border-white/20 bg-white/10 
                                       text-white placeholder-white/70 focus:border-white 
                                       focus:ring focus:ring-white/50 transition duration-200 ease-in-out 
                                       shadow-md hover:shadow-lg p-2"
                                type="password"
                                name="password"
                                required 
                                autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex flex-col space-y-4 mt-4">
                        <div class="flex items-center justify-end">
                            <x-primary-button class="transition duration-200 ease-in-out transform hover:scale-105">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
