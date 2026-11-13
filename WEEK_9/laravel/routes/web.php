<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RakController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('raks.index'));

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// harus login (admin dan staff)
Route::middleware('auth')->group(function () {
    Route::resource('raks', RakController::class)->only(['index', 'create', 'store']);

    // hanya admin
    Route::middleware('role:admin')->group(function () {
        Route::resource('raks', RakController::class)->only(['edit', 'update', 'destroy']);
    });
});