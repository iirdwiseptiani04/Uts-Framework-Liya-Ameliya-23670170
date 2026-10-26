<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

// LANDING PAGE (Fruitables)
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/shop', [LandingController::class, 'shop'])->name('landing.shop');
Route::get('/shop-detail', [LandingController::class, 'shopDetail'])->name('landing.shop-detail');
Route::get('/cart', [LandingController::class, 'cart'])->name('landing.cart');
Route::get('/checkout', [LandingController::class, 'checkout'])->name('landing.checkout');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');

// ADMIN (Maxton)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/calendar', [AdminController::class, 'calendar'])->name('calendar');
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('/modals', [AdminController::class, 'modals'])->name('modals');
    Route::get('/form-elements', [AdminController::class, 'formElements'])->name('form-elements');
    Route::get('/datatable', [AdminController::class, 'datatable'])->name('datatable');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
