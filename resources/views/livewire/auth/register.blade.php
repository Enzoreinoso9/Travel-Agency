<div class="min-h-screen flex relative">
    <!-- Fondo con imagen -->
    <div class="fixed inset-0 z-0">
        <img src="{{ asset('images/login-bg.jpg') }}" 
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
                    <img src="{{ asset('images/logo.png') }}" 
                         alt="Logo" 
                         class="h-12 w-auto">
                </div>

                <!-- Título y subtítulo -->
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-white">
                        {{ __('Create Account') }}
                    </h2>
                    <p class="mt-2 text-sm text-white/80">
                        {{ __('Sign up for your account') }}
                    </p>
                </div>

                <form wire:submit.prevent="register" class="mt-8 space-y-6">
                    <div class="space-y-5">
                        <!-- Nombre -->
                        <div>
                            <x-input-label for="nombre_usuario" :value="__('Nombre de Usuario')" class="text-white" />
                            <x-text-input wire:model.defer="nombre_usuario" 
                                id="nombre_usuario"
                                class="mt-1 block w-full rounded-md border-white/20 bg-white/10 
                                       text-white placeholder-white/70 focus:border-white 
                                       focus:ring-white/50"
                                type="text"
                                name="nombre_usuario"
                                required
                                autofocus />
                            <x-input-error :messages="$errors->get('nombre_usuario')" class="mt-2" />
                        </div>

                        <!-- Email -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" class="text-white" />
                            <x-text-input wire:model.defer="email" 
                                id="email"
                                class="mt-1 block w-full rounded-md border-white/20 bg-white/10 
                                       text-white placeholder-white/70 focus:border-white 
                                       focus:ring-white/50"
                                type="email"
                                name="email"
                                required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div>
                            <x-input-label for="password" :value="__('Password')" class="text-white" />
                            <x-text-input wire:model.defer="password" 
                                id="password"
                                class="mt-1 block w-full rounded-md border-white/20 bg-white/10 
                                       text-white placeholder-white/70 focus:border-white 
                                       focus:ring-white/50"
                                type="password"
                                name="password"
                                required />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white" />
                            <x-text-input wire:model.defer="password_confirmation" 
                                id="password_confirmation"
                                class="mt-1 block w-full rounded-md border-white/20 bg-white/10 
                                       text-white placeholder-white/70 focus:border-white 
                                       focus:ring-white/50"
                                type="password"
                                name="password_confirmation"
                                required />
                        </div>
                    </div>

                    <div class="flex flex-col space-y-4">
                        <x-primary-button>
                            {{ __('Register') }}
                        </x-primary-button>

                        <p class="text-center text-sm">
                            <a href="{{ route('login') }}" 
                               class="text-white hover:text-white/80">
                                {{ __('Already have an account? Login') }}
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
