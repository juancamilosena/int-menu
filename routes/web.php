<?php

use App\Http\Controllers\CartaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MenuComidaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/carta', [CartaController::class, 'carta'])->name('carta');

Route::get('/MenuComidas', [MenuComidaController::class, 'MenuComida'])->name('MenuComida');
