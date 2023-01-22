<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome()
    {
        return view('home', 'I am a user role');
    }

    public function editorHome()
    {
        return view('home', 'I am a Editor role');
    }

    public function adminHome()
    {
        return view('home', 'I am a Admin role');
    }


}
