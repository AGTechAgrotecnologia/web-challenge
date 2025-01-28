<?php

use App\Http\Controllers\ShoppingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/shoppings', [ShoppingController::class, 'index'])->name('shoppings');
    Route::get('/shoppings/create', [ShoppingController::class, 'create'])->name('shoppings.create');
});
