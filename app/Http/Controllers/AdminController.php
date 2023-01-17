<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

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

}
