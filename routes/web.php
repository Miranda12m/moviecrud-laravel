<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

/// User level



Route::get('/index', [MoviesController::class, 'index'])->name('pages.index');

Route::get('/articulo/{date}', [MoviesController::class, 'articulo'])->name('pages.articulo');