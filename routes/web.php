<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function () {
    return view('404');
});

//auth routes
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.signup');
});
