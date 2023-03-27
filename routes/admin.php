<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ViajeController;



Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');   
Route::resource('viajes', ViajeController::class)->only(['index', 'edit', 'update'])->names('admin.viajes');   

