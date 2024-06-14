<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signin', function () {
    return view('auth.signin');
});

// Route for signup view
Route::get('/signup', function () {
    return view('auth.signup');
});

// Route for checkout authenticated view
Route::get('/checkout-authenticated', function () {
    return view('checkout.checkout-authenticated');
});

// Route for checkout view
Route::get('/checkout', function () {
    return view('checkout.checkout');
});

// Route for details view
Route::get('/details', function () {
    return view('details');
});

