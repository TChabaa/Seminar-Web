<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
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

Route::get('/signup', function () {
    return view('auth.signup');
});

Route::get('/checkout', [CheckoutController::class, 'redirectToCheckout']);

Route::get('/details', function () {
    return view('details');
});

Route::get('/participated', function () {
    return view('participated');
})->middleware('auth');

Route::get('/createEvent', function () {
    return view('pic.create.createEvent');
});

Route::get('/eventList', function () {
    return view('pic.eventList');
});

Auth::routes();
