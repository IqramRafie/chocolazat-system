<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::middleware(['auth.check'])->group(function() {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['guest.check'])->group(function() {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'processLogin'])->name('login.submit');
});



