<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SkuController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TournamentPlayerController;

Route::get('/ping', function () {
    return response()->json(['message' => 'API funcionando']);
});

// API Routes for Card Bastion
Route::middleware('api')->group(function () {
    Route::apiResource('products', ProductController::class);
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('stores', StoreController::class);
    Route::apiResource('skus', SkuController::class);
    Route::apiResource('sales', SaleController::class);
    Route::apiResource('payments', PaymentController::class);
    Route::apiResource('tournaments', TournamentController::class);
    Route::apiResource('tournament-players', TournamentPlayerController::class);
});