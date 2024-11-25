@extends('layouts.app')

@section('title', 'Inicio')


@section('content')
    <div>
        <!--Breadcrumbs*-->
        <div class="breadcrumbs text-sm p-4  w-full">
            <ul class="flex space-x-2 text-green-900">
                <li class="font-bold">Inicio</li>
            </ul>
        </div>

        <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 p-8">
            <!--Logo -->
            <h1 class="mb-8">
                <img src={{ asset('images/logoG.png') }} alt="Logo" class="w-60 h-60 mx-auto" />
            </h1>

            <!-- Contenedor de paneles de control más ancho -->
            <div class="grid grid-cols-2 gap-8 w-full max-w-5xl">

                <!-- Paneles de control -->
                <a href="/notificaciones">
                    <div class="h-60 w-full flex items-center justify-center text-center bg-gray-300 shadow-lg rounded-lg">
                        <h1 class="text-2xl font-bold text-green-900 flex flex-col items-center">
                            <FaBell class=' text-4xl mb-2'></FaBell> <span>Alertas y</span><span> Notificaciones</span>
                        </h1>
                    </div>
                </a>

                <a href="/paquetes">
                    <div class="h-60 w-full flex items-center justify-center text-center bg-green-950 shadow-lg rounded-lg">
                        <h1 class="text-2xl font-bold text-white flex flex-col items-center">
                            <FaArchive class='text-4xl mb-2'></FaArchive><span> Paquetes de</span><span> Viajes</span>
                        </h1>
                    </div>
                </a>

                <a href="/viajes">
                    <div class="h-60 w-full flex items-center justify-center text-center bg-green-950 shadow-lg rounded-lg">
                        <h1 class="text-2xl font-bold text-white flex flex-col items-center ">
                            <FaBusAlt class='text-4xl mb-2'></FaBusAlt> <span>Opciones</span><span>de Transporte</span>
                        </h1>
                    </div>
                </a>

                <a href="/estadisticas">
                    <div class="h-60 w-full flex items-center justify-center text-center bg-gray-300 shadow-lg rounded-lg">
                        <h1 class="text-2xl font-bold text-green-900 flex flex-col items-center">
                            <FaPoll class='text-4xl mb-2'></FaPoll> <span>Estadísticas</span><span>Rápidas</span>
                        </h1>
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/Incio.css') }}">
@endpush
