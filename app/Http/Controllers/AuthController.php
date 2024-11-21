<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function home(Request $request)
    {
        return view('frontend/home');
    }
    public function forget_password(Request $request)
    {
        return view('frontend/forget_password');
    }

    public function login(Request $request)
    {
        return view('frontend/login');
    }

    public function register(Request $request)
    {
        return view('frontend/register');
    }

    public function about(Request $request)
    {
        return view('frontend/about');
    }

    public function page_not_found(Request $request)
    {
        return view('frontend/page_not_found/type1');
    }

    // public function login(Request $request)
    // {
    //     // Validation
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|string',
    //         'security_code' => 'required|string', // Add your security code validation here
    //     ]);

    //     // Authentication logic goes here
    //     if (auth()->attempt($request->only('email', 'password'))) {
    //         return redirect()->route('dashboard'); // Redirect to a protected page
    //     }

    //     return back()->withErrors(['email' => 'Invalid credentials']);
    // }
}
