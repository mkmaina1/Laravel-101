<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Authcontroller extends Controller
{
    public function showRegister()
    {
        return view('auth.register');

    }
    public function showLogin()
    {
        return view('auth.login');

    }
     public function register(Request $request)
    {
         $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('Infinite.index')->with('success', 'Registration successful. You are now logged in.');

    }
    public function login(Request $request)
    {
         $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

       if (Auth::attempt($validated)) {
        $request->session()->regenerate();

        return redirect()->route('Infinite.index')->with('success', 'Login successful.');
       }
       throw ValidationException::withMessages([
            'information' => 'Sorry incorrect information provided.'
        ]);
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('show.login')->with('success', 'You have been logged out.');

    }
}

