<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StandController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GameController;

// Trang chủ hiển thị danh sách games
Route::get('/', [GameController::class, 'index'])->name('games.index');
Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');

// Trang hiển thị danh sách khán đài
Route::get('/stands', [StandController::class, 'index'])->name('stands.index');

// Các tuyến đường liên quan đến đặt vé, yêu cầu người dùng đã đăng nhập
Route::middleware(['auth'])->group(function () {
    Route::get('/booking/create/{stand}', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/booking', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.add');
    Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
});

// Trang Dashboard và Profile (có xác thực)
Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::view('profile', 'profile')->middleware(['auth'])->name('profile');

// Tuyến đường xác thực (đăng nhập, đăng ký, quên mật khẩu, v.v.)
require __DIR__.'/auth.php';
