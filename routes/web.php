<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Dashboard general
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por auth
Route::middleware('auth')->group(function () {

    // Perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/view', function () {
        return view('profile');
    })->name('profile.view');
    Route::get('/profile/edit/view', function () {
        return view('profile-edit');
    })->name('profile.edit.view');

    // Configuraciones y otras vistas
    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');

    Route::get('/pokemon', function () {
        return view('pokemon');
    })->name('pokemon');

    Route::get('/magic', function () {
        return view('magic');
    })->name('magic');

    Route::get('/starwars', function () {
        return view('starwars');
    })->name('starwars');
});

// Zona de administración (solo admin)

Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

require __DIR__.'/auth.php';
