<?php

namespace App\Http\Controllers;

// use auth;
// use App\Models\User;
use App\Models\Admin;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    // Show Admin panel
    public function adminpanel()
    {
        // Show Index Page
        return view('adminpanel', [
            'listings' => Listing::latest()->filter(request(['search']))->simplePaginate(6)
            // 'listings' => Listing::all()
        ]);
       
    }

    public function userdata(Listing $listing)
    {
        // Show User Details
        return view('userdata', [
            'listing' => $listing
        ]);
    }

    
    // Show Main Page/Home
    public function adminlogin() {
        return view('admin.admin-login');
    }


    // Store Admin data
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required'],
            'phoneNumber' => ['required'],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hah Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        // $user = User::create($formFields);
        $admin = Admin::create($formFields);

        // Login
        // auth()->login($admin);

        return redirect('/allProducts')->with('message', 'Admin Created and Logged in');

    }


    // Login User
    // public function login() {
    //     return view('users.login-registration');
    // }

    // Authenticate Admin
    // public function authenticate(Request $request) {
    //     $formFields = $request->validate([
    //         'name' => ['required'],
    //         'password' => 'required'
    //     ]);

    //     if(auth()->attempt($formFields)) {
    //         $request->session()->regenerate();

    //         return redirect('/allProducts')->with('message', 'You are logged in');
    //     }

    //     return back()->withErrors(['name' => 'Invalid Credentials'])->onlyInput('name');

    // }


    public function authenticate(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('allProducts');
        }

        return redirect()->back()->withInput($request->only('name'))->withErrors([
            'name' => 'These credentials do not match our records.',
        ]);
    }
    
}