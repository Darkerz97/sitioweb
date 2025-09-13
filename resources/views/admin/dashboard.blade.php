@extends('layouts.app')

@section('title', 'Panel de Administración')

@section('content')
    <div class="min-h-screen bg-[#211b17] text-white py-10 px-6">
        <h1 class="text-4xl font-bold text-[#ecb23a] mb-6">Panel de Administración</h1>
        <p class="text-lg text-white/80">Bienvenido administrador, {{ auth()->user()->name }}.</p>
    </div>
@endsection
