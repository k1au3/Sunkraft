<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show Index Page
        return view('index', [
            'listings' => Listing::latest()->filter(request(['search']))->simplePaginate(6)
            // 'listings' => Listing::all()
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //show create form
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store Products data
        $formFields = $request->validate([
            'name' => 'required',
            'logo' => 'required',
            'amount' => 'required',
            'quantity' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        // Show Single Product Listing
        return view('products', [
            'listing' => $listing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        return view('edit', ['listing' => $listing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        // Update Products data
        $formFields = $request->validate([
            'name' => 'required',
            'logo' => 'required',
            'amount' => 'required',
            'quantity' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        // return redirect('/');
        return back()->with('message', 'Listing Updated Successfully');
        // return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        // Delete Product
        $listing->delete();
        return redirect('/')->with('message', 'Listing Deleted Sucessfully');

    }

    
        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function allproducts(Listing $listing)
    // {
    //     // Show all products
    //     return view('allProducts', [
    //         'listing' => $listing
    //     ]);
    // }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allproducts()
    {
        // Show Index Page
        return view('allProducts', [
            'listings' => Listing::latest()->filter(request(['search']))->simplePaginate(6)
            // 'listings' => Listing::all()
        ]);
       
    }

}
