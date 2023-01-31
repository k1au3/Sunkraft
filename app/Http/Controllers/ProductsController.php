<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

        return redirect('/allProducts')->with('message', 'Listing Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing, User $user)
    {
        // Show Single Product Listing
        return view('products', [
            'listing' => $listing
        ]);

        $user = User::find(
            $id = $user->id
        );


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
        return redirect('/allProducts')->with('message', 'Listing Updated Successfully');
        // return redirect()->back();
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
        return redirect('/allProducts')->with('message', 'Listing Deleted Sucessfully');

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


    // Add Products to Cart
    public function addToCart(Request $request, Listing $listing, User $user)
    {

        // obtain the user object
        $user = Auth::user();

        $request->session()->put('user', $user);
        $request->session()->put('user_id', $user->id);
        
        $product_id = $request->input('product_id');
        
        // Check if user exists
        if (Auth::check()) {
            $prod_check = Cart::where('id',$product_id)->first();
        
            // Check if product already in cart
            if ($prod_check) {
                if (Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()) {
                    // return response()->json(['status' => $prod_check->name." already added to cart"]);
                    return "Already in Cart";
                } else {
                    $cart = new Cart;
                    $cart->user_id = $request->user_id;
                    $cart->product_id = $request->product_id;
                    $cart->save();
                    return view('/cart');
                }
            }
        }   
    }

    public static function cartItem(Request $request)
    {
        // $user_id=Session::get('user')['id'];
        // return Cart::where('user_id')->count();

        $user = auth()->user();
        $count=Cart::where('user_id', $user->user_id)->count();
        return $count;
        
    }

    public static function showCart()
    {

        if(Auth::check()){

        $cartItems = Cart::where('user_id',Auth::user()->id)->get()->toArray();
        $cartItems = array_column($cartItems, 'product_id');
        // dd($cartItems);
        

        // If there are no items in the cart, set the count to 0
        if (!$cartItems) {
            $itemCount = 0;
        } else {
            // Get the total number of items in the cart
            // $itemCount = array_sum(array_column($cartItems, 'user_id'));
            $itemCount = count($cartItems);
            
        }

        // return view('cart', compact('itemCount'));
        return $itemCount;
        return redirect('/allProducts');

        }
    }
}
