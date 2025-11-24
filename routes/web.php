<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
