<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\InventoryController;

Route::middleware(['auth.check'])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('users');

    Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices');

    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');

    Route::get('/hr', [HrController::class, 'index'])->name('hr');

    Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['guest.check'])->group(function() {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'processLogin'])->name('login.submit');
});



