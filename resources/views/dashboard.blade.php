@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

  
  
<div class="bg-[#211b17] min-h-screen py-10 px-6 text-white">
    <h1 class="text-4xl font-bold text-[#ecb23a] mb-10 text-center">Bienvenido al Dashboard</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
        <x-dashboard-card 
            title="Pokemon"
            description="Explora el mundo de los Pokémon."
            :route="route('pokemon')"
        />

        <x-dashboard-card 
            title="Magic"
            description="Descubre cartas y hechizos mágicos."
            :route="route('magic')"
        />

        <x-dashboard-card 
            title="Star Wars"
            description="Visita una galaxia muy, muy lejana."
            :route="route('starwars')"
        />
    </div>
</div>
@endsection
