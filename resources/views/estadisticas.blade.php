@extends('layouts.app')

@section('title', 'Estadísticas')

@section('content')
    <div>
        <!--Breadcrumbs-->
        <div class="breadcrumbs text-sm p-4 w-full">
            <ul class="flex space-x-2 text-green-950">
                <li>
                    <a href="/inicio" class="font-bold hover:underline">Inicio</a>
                </li>
                <li class="font-bold">Estadísticas</li>
            </ul>
        </div>

        <!-- Componente Livewire de Estadísticas -->
        <div class="px-4">
            @livewire('dashboard.estadisticas')
        </div>
    </div>
@endsection
