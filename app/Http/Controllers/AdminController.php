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


    // Show Admin Add Products
    public function adminLogin()
    {
        //show Admin Index form
        return view('/admin/admin-login');
    }

    // Show Admin Add Products
    public function customersIndex()
    {
        //show Admin Index form
        return view('/admin/customers-index');
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

}
