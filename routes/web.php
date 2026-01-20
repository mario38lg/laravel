<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuloController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;

/*
|--------------------------------------------------------------------------
| RUTA PRINCIPAL
|--------------------------------------------------------------------------
*/
Route::get('/', [BuloController::class, 'index']);

/*
|--------------------------------------------------------------------------
| AUTENTICACIÓN
|--------------------------------------------------------------------------
*/

// Registro (solo para invitados)
Route::middleware('guest')->group(function () {
    Route::get('/register', [Register::class, 'show'])->name('register');
    Route::post('/register', [Register::class, '__invoke']);
});

// Login (solo para invitados)
Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', Login::class);
});

// Logout (solo para usuarios autenticados)
Route::middleware('auth')->post('/logout', Logout::class)->name('logout');

/*
|--------------------------------------------------------------------------
| BULOS / CHIRPS (solo usuarios autenticados)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    // Bulos
    Route::post('/bulos', [BuloController::class, 'store']);
    Route::get('/bulos/{bulo}/edit', [BuloController::class, 'edit']);
    Route::put('/bulos/{bulo}', [BuloController::class, 'update']);
    Route::delete('/bulos/{bulo}', [BuloController::class, 'destroy']);

    // Chirps
    Route::post('/chirps', [ChirpController::class, 'store']);
    Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);
    Route::put('/chirps/{chirp}', [ChirpController::class, 'update']);
    Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);
});
