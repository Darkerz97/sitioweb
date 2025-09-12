<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido | Mi Sitio Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#211b17] text-white font-sans">

    {{-- Header --}}
    <header class="bg-[#483330] shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-[#ecb23a]">Mi Sitio Web</h1>
            <nav class="space-x-4 text-sm">
                <a href="{{ route('dashboard') }}" class="text-white hover:text-[#ecb23a] transition">Dashboard</a>
                <a href="{{ route('pokemon') }}" class="text-white hover:text-[#ecb23a] transition">Pokemon</a>
                <a href="{{ route('magic') }}" class="text-white hover:text-[#ecb23a] transition">Magic</a>
                <a href="{{ route('starwars') }}" class="text-white hover:text-[#ecb23a] transition">Star Wars</a>
                <a href="{{ route('login') }}" class="text-[#637c98] hover:text-white transition">Iniciar sesión</a>
            </nav>
        </div>
    </header>

    {{-- Hero Section --}}
    <section class="bg-[#9d7552] py-24 text-center">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-5xl font-extrabold text-[#ecb23a] mb-4">Explora Universos Épicos</h2>
            <p class="text-lg text-white/90 mb-6">Accede a contenido exclusivo de Pokémon, Magic y Star Wars.</p>
            <a href="{{ route('dashboard') }}" class="inline-block bg-[#ecb23a] text-[#211b17] font-semibold px-6 py-3 rounded-md shadow hover:bg-[#b09c50] transition">
                Ir al Dashboard
            </a>
        </div>
    </section>

    {{-- Secciones --}}
    <section class="bg-[#211b17] py-20">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-3 gap-8">

            {{-- Pokemon --}}
            <div class="bg-[#483330] p-6 rounded-md shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-bold text-[#ecb23a] mb-2">Pokemon</h3>
                <p class="text-sm text-white/80 mb-4">Atrapa, entrena y explora el mundo Pokémon como nunca antes.</p>
                <a href="{{ route('pokemon') }}" class="text-[#637c98] hover:underline">Ver más</a>
            </div>

            {{-- Magic --}}
            <div class="bg-[#483330] p-6 rounded-md shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-bold text-[#ecb23a] mb-2">Magic</h3>
                <p class="text-sm text-white/80 mb-4">Descubre el poder de los hechizos y el universo de Magic.</p>
                <a href="{{ route('magic') }}" class="text-[#637c98] hover:underline">Ver más</a>
            </div>

            {{-- Star Wars --}}
            <div class="bg-[#483330] p-6 rounded-md shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-bold text-[#ecb23a] mb-2">Star Wars</h3>
                <p class="text-sm text-white/80 mb-4">Únete a la fuerza o al lado oscuro en una galaxia muy lejana.</p>
                <a href="{{ route('starwars') }}" class="text-[#637c98] hover:underline">Ver más</a>
            </div>

        </div>
    </section>

<section class="bg-[#211b17] py-20">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-[#ecb23a] mb-6 text-center">Instagram</h2>

        <!-- Elfsight Social Feed -->
        <script src="https://elfsightcdn.com/platform.js" async></script>
        <div class="elfsight-app-f0f034bf-85dc-407e-a894-c6464f08a999" data-elfsight-app-lazy></div>
    </div>
</section>


    {{-- Footer --}}
    <footer class="bg-[#483330] py-6 text-center text-sm text-[#9d7552]">
        &copy; {{ date('Y') }} Mi Sitio Web. Todos los derechos reservados.
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
