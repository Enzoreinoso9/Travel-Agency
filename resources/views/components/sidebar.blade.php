<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/Sidebar.css')
</head>

<body>

    <div class='w-54 bg-green-950 fixed h-full px-4 py-2'>
        <div class='my-2 mb-4'>
            <a href="/"><img src={{ asset('images/logoW.png') }} class='w-20 block mx-auto' /></a>
        </div>
        <br />
        <ul class='mt-3 text-white font-bold'>
            <li class='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
                <a href="/clientes" class="px-3">
                    <FaUsers class='inline-block w-6 h-6 mr-2 -mt-2'></FaUsers> Clientes
                </a>
            </li>


            <li class='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
                <a href="/proveedores" class="px-3">
                    <FaDollyFlatbed class='inline-block w-6 h-6 mr-2 -mt-2'></FaDollyFlatbed> Proveedores
                </a>
            </li>

            <li class='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
                <a href="/paquetes" class="px-3">
                    <FaArchive class='inline-block w-6 h-6 mr-2 -mt-2'></FaArchive> Paquetes
                </a>
            </li>


            <li class='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
                <a href="/viajes" class="px-3">
                    <FaBusAlt class='inline-block w-6 h-6 mr-2 -mt-2'></FaBusAlt> Transporte
                </a>
            </li>

            <li class='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
                <a href="/ventas" class="px-3">
                    <FaMoneyBillWave class='inline-block w-6 h-6 mr-2 -mt-2'></FaMoneyBillWave> Ventas
                </a>
            </li>

            <li class='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
                <a href="/estadisticas" class="px-3">
                    <FaPoll class='inline-block w-6 h-6 mr-2 -mt-2'></FaPoll> Estadisticas
                </a>
            </li>

            <li class='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
                <a href="/itinerarios" class="px-3">
                    <FaRegCalendarAlt class='inline-block w-6 h-6 mr-2 -mt-2'></FaRegCalendarAlt> Itinerario
                </a>
            </li>
        </ul>
    </div>

</body>

</html>
