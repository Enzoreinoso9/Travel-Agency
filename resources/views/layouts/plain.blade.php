<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('title', 'Document')</title>
    @vite('resources/css/plain.css')
    @stack('styles')
</head>

<body>

    <main class="contenido">
        @yield('content')
    </main>
    </div>

</body>

</html>
