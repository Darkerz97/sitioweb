@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="bg-[#211b17] min-h-screen py-10 px-6 text-white">
    <h1 class="text-4xl font-bold text-[#ecb23a] mb-10 text-center">Bienvenido al Dashboard</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
        {{-- Pokemon --}}
        <a href="{{ route('pokemon') }}" class="bg-[#483330] hover:bg-[#9d7552] transition p-6 rounded-lg shadow-md hover:shadow-xl border border-[#b09c50]">
            <h2 class="text-2xl font-semibold text-[#ecb23a]">Pokemon</h2>
            <p class="text-sm text-[#ffffffcc] mt-2">Explora el mundo de los Pokémon.</p>
        </a>

        {{-- Magic --}}
        <a href="{{ route('magic') }}" class="bg-[#483330] hover:bg-[#9d7552] transition p-6 rounded-lg shadow-md hover:shadow-xl border border-[#b09c50]">
            <h2 class="text-2xl font-semibold text-[#ecb23a]">Magic</h2>
            <p class="text-sm text-[#ffffffcc] mt-2">Descubre cartas y hechizos mágicos.</p>
        </a>

        {{-- Star Wars --}}
        <a href="{{ route('starwars') }}" class="bg-[#483330] hover:bg-[#9d7552] transition p-6 rounded-lg shadow-md hover:shadow-xl border border-[#b09c50]">
            <h2 class="text-2xl font-semibold text-[#ecb23a]">Star Wars</h2>
            <p class="text-sm text-[#ffffffcc] mt-2">Visita una galaxia muy, muy lejana.</p>
        </a>
    </div>
</div>
@endsection
