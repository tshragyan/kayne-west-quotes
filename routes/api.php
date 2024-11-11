<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KayneQuoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
Route::get('/quotes', [KayneQuoteController::class, 'getQuotes'])->middleware('auth:sanctum')->name('api.quotes');
