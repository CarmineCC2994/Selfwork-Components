<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');

Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'])->name('aboutUsDetail');



Route::get('/contatti', function () {
    return view('contacts');
})-> name('contacts');

Route::get('/games', [GameController::class, ('gamelist')])-> name('game.list');

Route::get('/game/detail/{id}', [GameController::class, ('gamedetail')])-> name('game.detail');

