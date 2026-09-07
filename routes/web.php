<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route pointing to the index method
Route::get('/', [PageController::class, 'index']);

// Route pointing to the about method
Route::get('/about', [PageController::class, 'about']);