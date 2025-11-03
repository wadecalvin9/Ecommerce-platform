<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;

route::get('/products', function () {
    return view('products.add');
});

Route::get('/products/add', [ProductController::class, 'create'])->name('product.create');
Route::post('/products/add', [ProductController::class, 'store'])->name('product.add');



Route::get('/', [ProductController::class, 'index'])->name('home');


//auth routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login.page');
Route::get('/register', function () {
    return view('auth.signup');
})->name('register.page');
Route::post('/register', [AuthController::class, 'Register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');


//user routes
Route::get('/profile', function () {
    return view('profile.index');
})->name('user.profile');
Route::get('/edit', function () {
    return view('profile.edit');
})->name('user.profile.edit');


//Wishlist routes
Route::post('/wishlist/add/{id}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');


//cart routes
Route::get('/cart', function () {
    return view('cart.index');
})->name('cart.index');



Route::put('/profile/update', [AuthController::class, 'update'])->name('user.profile.update');
