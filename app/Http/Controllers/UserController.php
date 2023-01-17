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
            'phoneNumber' => ['required'],
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

    //Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }

    // Login User
    public function login() {
        return view('users.login-registration');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'name' => ['required'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are logged in');
        }

        return back()->withErrors(['name' => 'Invalid Credentials'])->onlyInput('name');

    }
    
}