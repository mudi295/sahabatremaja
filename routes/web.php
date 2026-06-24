<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/artikel', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('/artikel/{article}', [ArticleController::class, 'show'])
    ->name('articles.show');

    Route::get('/program', [ProgramController::class, 'index'])
    ->name('programs.index');

Route::get('/program/{program}', [ProgramController::class, 'show'])
    ->name('programs.show');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');
