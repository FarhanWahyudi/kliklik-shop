<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/detail-product', function () {
    return view('detail-product');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/transaction', function () {
    return view('transaction');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/user-profile', function () {
    return view('profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
