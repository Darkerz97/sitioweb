<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', function () {
        return view('profile');
        })->name('profile');
    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');
    Route::get('/profile/edit', function () {
        return view('profile-edit'); // crea esta vista si no existe
    })->name('profile.edit');
});

require __DIR__.'/auth.php';
