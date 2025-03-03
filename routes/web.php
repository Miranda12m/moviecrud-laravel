<?php

use Illuminate\Support\Facades\Route;

/// User level

Route::get('/index', function () {
    $gabus = 'Te quiero mucho '.'Gabus';
    return view('pages.index', ['name' => $gabus]);
});

Route::get('/articulo', function () {
    return view('pages.articulo');
});


/// Admin level
Route::get('/nuevo_articulo', function () {
    return '';
});

Route::get('/modifica_articulo', function () {
    return '';
});

Route::get('/listado_articulo', function () {
    return '';
});