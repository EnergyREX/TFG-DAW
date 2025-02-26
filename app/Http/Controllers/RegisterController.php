<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // View for /register
    function index() {
        return view('register');
    }

    function store() {
        // Validate Data
        $validated = request()->validate([
            'dni' => ['required'],
            'name' => ['required'],
            'surname' => ['required'],
            'address' => ['required'],
            'phone_number' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed']
        ]);

        // Store in database
        $user = User::create($validated);

        // Redirection
        return redirect('/login');
    }
}
