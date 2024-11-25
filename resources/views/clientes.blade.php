@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <div className="p-4">

        <!--Breadcrumbs-->
        <div class="breadcrumbs text-sm mb-4">
            <ul class="flex space-x-2 tex text-green-900">
                <li><a href="/" class="font-bold hover:underline">Inicio</a></li>
                <li class="font-bold">Clientes</li>
            </ul>
        </div>



        <button class="btn btn-info mt-5 mb-4 text-white">Agregar </button>

        <div class="overflow-x-auto mr-5 max-w-full">
            <table class="table w-full min-w-[800px]">
                <!-- head -->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Documento</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr key={cliente.id}>
                        <td>{cliente.id}</td>
                        <td>{cliente.nombre}</td>
                        <td>{cliente.apellido}</td>
                        <td>{cliente.documento}</td>
                        <td>{cliente.email}</td>
                        <td>{cliente.telefono}</td>
                        <td>{cliente.direccion}</td>
                        <td>
                            <div class="flex space-x-2 justify-center">
                                <button class="btn btn-warning text-white">Editar </button>
                                <button class="btn btn-error text-white">Eliminar</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/Clientes.css') }}">
@endpush
