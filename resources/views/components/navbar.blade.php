<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/Navbar.css')
</head>

<body>

    <div class="navbar bg-gray-300">
        <div class="flex-1">

        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <details>
                        <summary class="font-bold text-gray-700">Admin <FaUserCircle></FaUserCircle>
                        </summary>
                        <ul class="text-gray-700 bg-gray-300 rounded-t-none p-2">
                            <li>
                                <a class="font-bold">Editar</a>
                            </li>
                            <li>
                                <a class="font-bold">Salir</a>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>
