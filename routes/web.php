<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\GatewayController::class, 'index']);

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'index']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);

Route::get('redirect/{token}', [\App\Http\Controllers\GatewayController::class, 'requestToken']);
