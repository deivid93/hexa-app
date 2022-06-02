<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Archivo base de rutas
|
*/

Route::get('/', function () {
    return view('modUsuarios::admin');
});


