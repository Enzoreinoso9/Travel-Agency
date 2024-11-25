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



        <button id="agregar" class="btn btn-info mt-5 mb-4 text-white">Agregar </button>

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




    <!--FORMULARIO PARA AGREGAR DATOS-->
    <div id="formularioContainer" class="formulario-container">
        <div class="formulario">
            <span id="cerrarAgregar" class="cerrar-formulario">&times;</span>
            <h2>Registrar Cliente</h2>
            <form class="cliente-form" action="" method="post">

                <div class="form-grupo">
                    <label for="">Nombres:</label>
                    <input type="text" name="nombre" id="nombre">
                </div>

                <div class="form-grupo">
                    <label for="">Apellido:</label>
                    <input type="text" name="apellido" id="apellido">
                </div>

                <div class="form-grupo">
                    <label for="">DNI:</label>
                    <input type="text" name="dni" id="dni">
                </div>

                <div class="form-grupo">
                    <label for="">Email:</label>
                    <input type="email" name="correo" id="correo">
                </div>


                <div class="form-grupo">
                    <label for="">Telefono:</label>
                    <input type="text" name="telefono" id="telefono">
                </div>


                <div class="form-grupo">
                    <label for="">Direccion:</label>
                    <input type="text" name="direccion" id="direccion">
                </div>

                <input type="submit" name="Guardar" class="guardar" value="Guardar">

            </form>

        </div>

    </div>





@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/Clientes.css') }}">
@endpush

@push('scripts')
    @vite('resources/js/clientes.js')
@endpush
