<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inicio;
use App\Http\Controllers\InicioController;

Route::get('/', [InicioController::class, 'index2'])->name('inicio2.index');
Route::get('/inicio', [InicioController::class, 'index'])->name('inicio.index');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
