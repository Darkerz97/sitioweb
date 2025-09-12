@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <a href="{{ route('pokemon') }}" class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold">Pokemon</h2>
            <p class="text-sm text-gray-600 mt-2">Explora el mundo de los Pokémon.</p>
        </a>

        <a href="{{ route('magic') }}" class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold">Magic</h2>
            <p class="text-sm text-gray-600 mt-2">Descubre cartas y hechizos.</p>
        </a>

        <a href="{{ route('starwars') }}" class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold">Star Wars</h2>
            <p class="text-sm text-gray-600 mt-2">Visita una galaxia muy, muy lejana.</p>
        </a>
    </div>
@endsection
