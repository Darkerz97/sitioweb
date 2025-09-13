@extends('layouts.app')

@section('title', 'Zona Empleados')

@section('content')
    <div class="min-h-screen bg-[#211b17] text-white py-10 px-6">
        <h1 class="text-4xl font-bold text-[#ecb23a] mb-6">Zona de Empleados</h1>
        <p class="text-lg text-white/80">Bienvenido, {{ auth()->user()->name }}. Aquí puedes gestionar tus tareas.</p>
    </div>
@endsection
