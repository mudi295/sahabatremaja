<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\EvacuationRouteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\GalleryController; 

Route::get('/', [HomeController::class, 'index']);


Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/volunteer', [VolunteerController::class, 'index'])->name('volunteer.index');

// Rute Artikel
Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/artikel/{article}', [ArticleController::class, 'show'])->name('articles.show');

// Rute Program
Route::get('/program', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/program/{program}', [ProgramController::class, 'show'])->name('programs.show');

// Rute Materi
Route::get('/materi', [MaterialController::class, 'index'])->name('materials.index');
Route::get('/materi/video', [MaterialController::class, 'videos'])->name('materials.videos');
Route::get('/materi/{slug}', [MaterialController::class, 'show'])->name('materials.show');

// Rute Simpan Kontak
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Rute Jalur Evakuasi
Route::get('/evacuation-routes', [EvacuationRouteController::class, 'index'])->name('evacuation.index');
Route::get('/evacuation-routes/{id}', [EvacuationRouteController::class, 'show'])->name('evacuation.show');