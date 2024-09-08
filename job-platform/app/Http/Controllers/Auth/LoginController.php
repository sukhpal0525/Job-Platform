<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
      return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('index');
        } else {
            $error = 'Login failed. Please check your credentials and try again.';

            // Check if the email exists
            if (!User::where('email', $request->email)->exists()) {
                $error = 'The email address you entered is not registered.';
            }

            // Check if the password was provided
            if (empty($request->password)) {
                $error = 'Please enter your password.';
            }

            // Check if the email was provided
            if (empty($request->email)) {
                $error = 'Please enter your email address.';
            }

            return back()->with('error', $error)->withInput();
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
