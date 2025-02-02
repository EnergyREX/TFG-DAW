<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    // View for login
    function index() {
        return view('login');
    }

    // Log in the user
    function store() {
        // Validate Data
        $validated = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Store in database
        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, credentials do not match',
                'password' => 'Sorry, credentials do not match'
            ]);
        } else {
            request()->session()->regenerate();
        }
        
        // Redirection
        return redirect('/');
    }

    // Logout
    function destroy() {
        Auth::logout();
        return redirect('/');
    }
}
