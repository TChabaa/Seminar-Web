<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // Lokasi default untuk redirect setelah login
    protected $redirectTo = '/';

    // Fungsi yang dijalankan setelah autentikasi berhasil
    protected function authenticated(Request $request, $user)
    {
        // Logging untuk memeriksa URL yang diinginkan
        Log::info('Redirecting to intended URL', ['url' => $request->session()->get('url.intended')]);

        // Redirect ke URL yang diinginkan atau ke $this->redirectPath()
        return redirect()->intended($this->redirectPath());
    }

    // Constructor
    public function __construct()
    {
        // Middleware 'guest' hanya untuk method selain 'logout'
        $this->middleware('guest')->except('logout');
    }

    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.signin');
    }
}
