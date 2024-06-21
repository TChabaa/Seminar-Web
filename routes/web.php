<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Http\Controllers\ReceiptController;

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\EventManagementController;

Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.submit');
    Route::get('dashboard', function() {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('users', UserManagementController::class)->names('admin.users');
    Route::resource('events', EventManagementController::class)->names('admin.events');
});

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

Route::post('/receipts', [ReceiptController::class, 'store'])->name('receipts.store')->middleware('auth');

Route::resource('/pic/events', EventController::class);

Auth::routes();
