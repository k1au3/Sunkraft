<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

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
 
        // $usertype = Auth::user()->usertype;
    
        // if ($usertype == '0') {
        //     return redirect('/');
        // } else {
        //     return redirect('/admin/index');
        // }
    
        

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

            $usertype = Auth::user()->usertype;
    
            if ($usertype == '0') {
                return redirect('/');
            } else {
                return redirect('/admin/index');
            }

            // return redirect('/')->with('message', 'You are logged in');
        }

        return back()->withErrors(['name' => 'Invalid Credentials'])->onlyInput('name');

    } 

    // Show Account Page/Home
    public function account() {
        return view('users.account');
    }

    // Show Order Page/Home
    public function order() {
        return view('users.order');
    }
    
    


}