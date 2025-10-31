<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');





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
