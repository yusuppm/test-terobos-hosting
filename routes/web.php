<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\ContactController;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// // Projects Routes
// Route::prefix('projects')->name('projects.')->group(function () {
//     Route::get('/', [ProjectController::class, 'index'])->name('index');
//     Route::get('/{project:slug}', [ProjectController::class, 'show'])->name('show');
// });

// News Routes (if needed)
Route::prefix('news')->name('news.')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('index');
    Route::get('/{news:slug}', [NewsController::class, 'show'])->name('show');
});

// // Shop Routes
// Route::prefix('shop')->name('shop.')->group(function () {
//     Route::get('/', [ShopController::class, 'index'])->name('index');
//     Route::get('/{product:slug}', [ShopController::class, 'show'])->name('show');
// });

// Pembelajaran & Kursus Routes 
Route::get('/pembelajaran', [KursusController::class, 'info'])->name('pembelajaran.info');
Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');

// Komunitas
Route::get('/komunitas', [KomunitasController::class, 'index'])->name('komunitas.index');

// perangkat
Route::get('/perangkat', [PerangkatController::class, 'index'])->name('perangkat.index');

// Kontak
Route::get('/kontak', [ContactController::class, 'index'])->name('contact.index');

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
// Guest routes (hanya bisa diakses jika belum login)
    Route::middleware('guest:customer')->group(function () {
        Route::get('/login', [CustomerAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [CustomerAuthController::class, 'login'])->name('login.post');
        Route::get('/register', [CustomerAuthController::class, 'showRegisterForm'])->name('register');
        Route::post('/register', [CustomerAuthController::class, 'register'])->name('register.post');
        Route::get('/forgot-password', [CustomerAuthController::class, 'showForgotPasswordForm'])->name('forgot-password');
        Route::post('/forgot-password', [CustomerAuthController::class, 'sendResetLink'])->name('forgot-password.post');
    });
    
    // Authenticated routes (hanya bisa diakses jika sudah login)
    Route::middleware('auth:customer')->group(function () {
        Route::post('/logout', [CustomerAuthController::class, 'logout'])->name('logout');
        Route::get('/profile', [CustomerAuthController::class, 'profile'])->name('profile');
        Route::post('/profile', [CustomerAuthController::class, 'updateProfile'])->name('profile.update');
        Route::post('/change-password', [CustomerAuthController::class, 'changePassword'])->name('change-password');
    });
});