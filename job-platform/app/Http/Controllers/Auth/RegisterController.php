<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
      return view('auth.register');
    }

    public function register(Request $request)
    {
      $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name'  => 'required|string|max:255',
        'email'      => 'required|string|max:255|email|unique:users',
        'password'   => 'required|string|confirmed',
      ]);

      $user = User::create([
        'first_name' => $request->first_name,
        'last_name'  => $request->last_name,
        'email'      => $request->email,
        'password'   => Hash::make($request->password),
      ]);

      Auth::login($user);

      return redirect()->route('index')->with('success', 'Registration success. You are now logged in');
    }
}
