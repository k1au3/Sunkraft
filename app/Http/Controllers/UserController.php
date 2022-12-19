<?php

namespace App\Http\Controllers;


use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show Main Page/Home
    public function main() {
        return view('components.header');
    }
    
}