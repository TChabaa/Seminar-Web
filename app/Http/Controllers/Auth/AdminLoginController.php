<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminLoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
        // Validate the incoming request data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to authenticate using the 'admin' guard
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect
            return redirect()->route('admin.users.index');
        }

        // Authentication failed, throw validation exception
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }
}

