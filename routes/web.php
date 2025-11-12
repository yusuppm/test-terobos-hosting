<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\ContactController;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// News Routes (if needed)
Route::prefix('news')->name('news.')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('index');
    Route::get('/{news:slug}', [NewsController::class, 'show'])->name('show');
});

// Pembelajaran & Kursus Routes 
Route::get('/pembelajaran', [KursusController::class, 'info'])->name('pembelajaran.info');
Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');

// Komunitas
Route::get('/komunitas', [KomunitasController::class, 'index'])->name('komunitas.index');

// perangkat
Route::get('/perangkat', [PerangkatController::class, 'index'])->name('perangkat.index');

// Kontak
Route::get('/kontak', [ContactController::class, 'index'])->name('contact.index');
