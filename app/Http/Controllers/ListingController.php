<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    // Store Products data
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'quantity' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        return redirect('/');
    }
}