<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\MovieController;

/// User level



Route::get('/index', [MoviesController::class, 'index'])->name('pages.index');

Route::get('/articulo/{date}', [MoviesController::class, 'articulo'])->name('pages.articulo');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('movies', MovieController::class);
