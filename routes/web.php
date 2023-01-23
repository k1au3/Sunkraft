<?php

use App\Models\Listing;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Show Home Page
Route::get('/', [ProductsController::class, 'index']);

// Show Product Create Form
Route::get('/create', [ProductsController::class, 'create']);

// Show Edit Form
Route::get('/products/{listing}/edit', [ProductsController::class, 'edit']);

// Update Product
Route::put('/{listing}/', [ProductsController::class, 'update']);

// Delete Product
Route::delete('/{listing}/', [ProductsController::class, 'destroy']);

// Store Product Data
 Route::post('/listings', [ProductsController::class, 'store']);

// Single Product Page
Route::get('/products/{listing}', [ProductsController::class, 'show']);

// Show Register Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Show Login Form
// Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('auth');

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Login User
Route::post('/users/authenticate', [ UserController::class, 'authenticate']);

// Show All Products
Route::get('/allProducts', [ProductsController::class, 'allproducts']);


// Show Admin Panel
// Route::get('/adminpanel', [AdminController::class, 'adminpanel']);

// Show Users and User Info
// Route::get('/userdata', [AdminController::class, 'userdata']);



// Show USER Login + Register Form
Route::get('/login-registration', [UserController::class, 'login']);

// Create/ Register Admin
// Route::post('/admin', [AdminController::class, 'store']);

// Show Admin LOGIN
// Route::get('/admin-login', [AdminController::class, 'adminlogin']);

// Login Admin
// Route::post('/authenticate', [ AdminController::class, 'authenticate']);


Auth::routes();

// User Route
Route::middleware(['auth', 'user-role:user'])->group(function()
{
    Route::get("/home", [HomeController::class, 'userHome'])->name('home');
});

// Editor Route
Route::middleware(['auth', 'user-role:editor'])->group(function()
{
    Route::get("/editor/home", [HomeController::class, 'editorHome'])->name('home.editor');
});

// Admin Route
Route::middleware(['auth', 'user-role:admin'])->group(function()
{
    Route::get("/admin/home", [HomeController::class, 'adminHome'])->name('home.admin');
});


// Return Index page
// Route::get('/', function () {
//     return view('index');
// });

// Return Products Page
// Route::get('/products', function () {
//     return view('products');
// });

// Route the Listings from the Modal
// Route::get('/listings', function () {
//     return view('listings', [
//         'heading' => 'Latest Listing',
//         'listings' => Listing::all()
//     ]);
// });

// Single Listing
// Route::get('/listings/{id}', function($id) {
//     return view('listing', [
//         'listing' => Listing::find($id)
//     ]);
// });



// Single Listing route
// Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Route::get('/', function () {
//     return view('listings', [
//         'heading' => 'Latest Listing',
//         'listings' => [
//             'id' => 1,
//             'title' => 'Listing One',
//             'description' => 'rytyliu;o egfwhejhughfugiw gygcwy
//             ctvybunuyctuoib vbuoivguhb ifyutyfcxfyufcy
//             wcfycwtcfvax;u qxqutftdugof ytultfytuylidtu uidtkufydtkfyicgl
//             fylukcjflcgyi cghjhflcghjf cghfcglcxfhkccg hfyucg
//             fyfycgjifylc gjgu;ifyl;ui fycgjlhfydcglgu hvg
//             ltdcglfcghl ;iclgjvh;guc jhlvguvhkcgjvhgucjhflcg'
//         ],
//         [
//             'id' => 2,
//             'title' => 'Listing Two',
//             'description' => 'rytyliu;o egfwhejhughfugiw gygcwy
//             ctvybunuyctuoib vbuoivguhb ifyutyfcxfyufcy
//             wcfycwtcfvax;u qxqutftdugof ytultfytuylidtu uidtkufydtkfyicgl
//             fylukcjflcgyi cghjhflcghjf cghfcglcxfhkccg hfyucg
//             fyfycgjifylc gjgu;ifyl;ui fycgjlhfydcglgu hvg
//             ltdcglfcghl ;iclgjvh;guc jhlvguvhkcgjvhgucjhflcg'
//         ]
        
//     ]);
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
