<?php

use App\Http\Controllers\GoodbyeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/goodbye', [GoodbyeController::class, 'goodbye'])->name('goodbye');