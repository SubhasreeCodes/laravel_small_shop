<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function home(Request $request)
    {
        return view('frontend/home');
            
    }

    public function account(Request $request)
    {
        return view('frontend/page_account');
    }
    public function forget_password(Request $request)
    {
        return view('frontend/forget_password');
    }

    public function login(Request $request)
    {
        // return view('frontend/login');
        // Check if user is authenticated
        if (auth()->check()) {
            // Redirect logged-in user to 'index' route or wherever you want
            return redirect()->route('frontend/home');
        }

        // If not authenticated, show the home page
        return view('frontend/home'); // Assuming 'home' is the view name

    }

    // Handle the login form submission
    public function login_form(Request $request)
    {
        // Validate the login input
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'security_code' => 'required', // You can add additional validation for the security code if needed
        ]);

        // Attempt to log the user in
        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $request->remember)) {
            // Redirect to the desired page if login is successful
            return redirect()->route('home'); // Redirect to the home page or another page after successful login
        }

        // If authentication fails, redirect back with an error
        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ]);

        if (auth()->check()) {
            return redirect()->route('index'); // Or wherever you want to redirect logged-in users
        }
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
