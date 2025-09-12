<header class="bg-[#483330] shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-[#ecb23a]">
    <a href="/" class="hover:underline">CardBastion</a>
</h1>
        <nav class="space-x-4 text-sm">
            <a href="{{ route('dashboard') }}" class="text-white hover:text-[#ecb23a] transition">Dashboard</a>
            <a href="{{ route('pokemon') }}" class="text-white hover:text-[#ecb23a] transition">Pokemon</a>
            <a href="{{ route('magic') }}" class="text-white hover:text-[#ecb23a] transition">Magic</a>
            <a href="{{ route('starwars') }}" class="text-white hover:text-[#ecb23a] transition">Star Wars</a>
            @auth
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-[#637c98] hover:text-white transition">Salir</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}" class="text-[#637c98] hover:text-white transition">Iniciar sesión</a>
            @endauth
        </nav>
    </div>
</header>
