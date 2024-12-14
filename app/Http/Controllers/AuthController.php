<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check())
            return redirect()->route('home');

        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->only(['username', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
