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

Route::name('Usuarios')
     ->group(base_path('src/Usuarios/Infraestructura/Routes/web.php'));

