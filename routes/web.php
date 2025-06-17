<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::post('/dashboard/usuarios', [DashboardController::class, 'crearUsuario'])->name('usuario.crear');

Route::post('/dashboard/products', [DashboardController::class, 'createProduct'])->name('dashboard.products.store');
