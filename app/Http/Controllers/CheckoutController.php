<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function redirectToCheckout()
    {
        if (Auth::check()) {
            return view('checkout.checkout-authenticated');
        } else {
            return view('checkout.checkout');
        }
    }
}
