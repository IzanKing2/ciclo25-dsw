<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;

Route::get('/', [PeliculaController::class, 'index']);

Route::get('/peliculas/{id}', [PeliculaController::class, 'mostrar']);

Route::post('/peliculas/{id}/opinar', [PeliculaController::class, 'opinar']);
