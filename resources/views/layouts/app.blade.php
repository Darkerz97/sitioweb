<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- Barra de navegación superior --}}
    <header class="bg-white shadow mb-6">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center gap-6">
                <a href="{{ route('dashboard') }}" class="text-xl font-bold text-blue-700 hover:underline">Dashboard</a>
                <nav class="hidden sm:flex gap-4">
                    <a href="{{ route('pokemon') }}" class="text-gray-700 hover:text-blue-600 hover:underline">Pokemon</a>
                    <a href="{{ route('magic') }}" class="text-gray-700 hover:text-blue-600 hover:underline">Magic</a>
                    <a href="{{ route('starwars') }}" class="text-gray-700 hover:text-blue-600 hover:underline">Star Wars</a>
                </nav>
            </div>

            {{-- Autenticación --}}
            @auth
                <div class="flex items-center gap-4">
                    <span class="text-sm text-gray-600">Hola, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-red-600 hover:underline">Cerrar sesión</button>
                    </form>
                </div>
            @else
                <div class="flex gap-4 text-sm">
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Iniciar sesión</a>
                    <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Registrarse</a>
                </div>
            @endauth
        </div>
    </header>

    {{-- Contenido de la vista --}}
    <main class="max-w-6xl mx-auto px-4">
        @yield('content')
    </main>

    @vite('resources/js/app.js')
</body>
</html>
