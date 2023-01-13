<?php

namespace App\Http\Controllers;


use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show Main Page/Home
    public function create() {
        return view('users.register');
    }

    // Store user data
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required'],
            'number' => ['required'],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hah Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User Created and Logged in');

    }
    
}