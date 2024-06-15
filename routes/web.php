<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
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

Route::get('/participated', function () {
    return view('participated');
});

Route::get('/createEvent', function () {
    return view('pic.create.createEvent');
});

Route::get('/eventList', function () {
    return view('pic.eventList');
});



Auth::routes();