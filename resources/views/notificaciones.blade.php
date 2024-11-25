@extends('layouts.app')

@section('title', 'Notificaciones')

@section('content')

    <div>
        <!--Breadcrumbs-->
        <div class="breadcrumbs text-sm p-4  w-full">
            <ul class="flex space-x-2 tex text-green-950">
                <li>
                    <a href="/" class="font-bold hover:underline">Inicio</a>
                </li>
                <li class="font-bold">Notificaciones</li>
            </ul>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/Notificaciones.css') }}">
@endpush
