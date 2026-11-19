<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;

Route::get('/', [MangaController::class, 'home'])
    ->name('home');

Route::get('/mangas', [MangaController::class, 'index'])
    ->name('mangas.index');

Route::get('/mangas/{id}', [MangaController::class, 'show'])
    ->name('mangas.show');