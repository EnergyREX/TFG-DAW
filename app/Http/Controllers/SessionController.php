<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    function index() {
        return view('login');
    }

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
        }
    
        request()->session()->regenerate();
        
        // Redirection
        return redirect('/');
        // Redirect to Dashboard
        
    }

    function destroy() {
        Auth::logout();
        return redirect('/');
    }
}
