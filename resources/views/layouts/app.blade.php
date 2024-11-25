<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('title', 'Document')</title>
    @vite('resources/css/app.css')
    @stack('styles')
</head>

<body>

    <header>
        @include('components.navbar')
    </header>

    <div class="app-container">
        <aside>
            @include('components.sidebar')
        </aside>

        <main class="contenido">
            @yield('content')
        </main>
    </div>


    @stack('scripts')
</body>

</html>
