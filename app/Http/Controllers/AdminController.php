<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Show admin Panel
    public function show()
    {
        //show Admin Index form
        return view('/admin/admin-panel');
    }

    // Show Admin Add Products
    public function addproducts()
    {
        //show Admin Index form
        return view('/admin/create-products');
    }
}
