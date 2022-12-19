<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    // Show landing page
    public function index() {
        // dd(Listing::latest()->filter(request(['tag','search']))->paginate(5));
        return view ('welcome', [
            // 'listings' => Listing::latest()->filter(request(['tag','search']))->paginate(14)
            'listings' => Listing::latest()->filter(request(['tag','search']))->simplePaginate(8)
        ]);
    }
}