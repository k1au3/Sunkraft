<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Show admin Panel
    public function show(Listing $listing)
    {
        //show Admin Index form
        // return view('/admin/admin-panel');
        return view('/admin/admin-panel', [
            'listings' => Listing::latest()->filter(request(['search']))->simplePaginate(6)
            // 'listings' => Listing::all()
        ]);
    }

    //Show admin index
    public function prods()
    {
        //show Admin Index form
        return view('/admin/products');
    }

    //Show admin index
    public function index()
    {
        //show Admin Index form
        return view('/admin/index');
    }



    // Show Admin Add Products
    public function addproducts()
    {
        //show Admin Index form
        return view('/admin/create-products');
    }


    // Show Admin Add Products
    public function adminLogin()
    {
        //show Admin Index form
        return view('/admin/admin-login');
    }

    // Show Admin Add Products
    public function customers()
    {
        //show Admin Index form
        return view('/admin/customers');
    }

    // Show Admin Add Products
    public function editProducts()
    {
        //show Admin Index form
        return view('/admin/edit-products');
    }

    // Show Admin Add Products
    public function orders()
    {
        //show Admin Index form
        return view('/admin/orders');
    }

    // Show Admin Add Products
    public function suncraftProducts()
    {
        //show Admin Index form
        return view('/admin/suncraft-products');
    }

    // Show Admin Add Products
    public function category()
    {
        //show Admin Index form
        return view('/admin/category');
    }

    // Show Products
    public function products()
    {
        //show Admin Index form
        return view('/admin/products');
    }

}
