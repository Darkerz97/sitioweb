<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

  
    <x-navbar />

    {{-- Contenido de la vista --}}
    <main class="max-w-6xl mx-auto px-4">
        @yield('content')
    </main>

        <x-footer />

    @vite('resources/js/app.js')
</body>
</html>
