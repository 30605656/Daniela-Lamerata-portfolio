<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/sobre_mi', [PortfolioController::class, 'sobreMi']);
Route::get('/servicios', [PortfolioController::class, 'servicios']);
Route::get('/contacto', [PortfolioController::class, 'contacto']);

Route::post('/contacto', [PortfolioController::class, 'enviarContacto']);