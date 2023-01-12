<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use PhpParser\Node\Stmt\Return_;

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

// Store Product Data
 Route::post('/listings', [ProductsController::class, 'store']);

// Single Product Page
Route::get('/products/{listing}', [ProductsController::class, 'show']);


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