<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KayneQuoteController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [KayneQuoteController::class, 'kayneQuotes'])->middleware(AuthMiddleware::class)->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
