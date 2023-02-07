<?php

use App\Models\Listing;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controller\PayController;

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
Route::get('/register', [UserController::class, 'create']);

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


// Show USER Login + Register Form
Route::get('/login-registration', [UserController::class, 'login']);


// Admin Panel Frontend

// Show Admin Panel
Route::get('/admin/index', [AdminController::class, 'index']);

// Show Admin Panel
Route::get('/admin/admin-login', [AdminController::class, 'show']);

// Show Admin Add Products
Route::get('/admin/create-products', [AdminController::class, 'addproducts']);

// Add to Cart
Route::post('/cart', [ProductsController::class, 'addToCart']);
// Route::post('/cart', [ProductsController::class, 'addToCart'])->name('login')->middleware('auth');

// Payment
Route::post('/buy-now', [ProductsController::class, 'buyNow']);

// Admin Panel Frontend

// Show Admin Panel
// Route::get('/admin/products', [AdminController::class, 'prods']);

// Show Admin Index
Route::get('/admin/admin-index', [AdminController::class, 'adminIndex']);

// Show Admin Add Products
Route::get('/admin/create-products', [AdminController::class, 'addproducts']);

// Show Admin Panel
Route::get('/admin/admin-login', [AdminController::class, 'adminLogin']);

// Show Admin Panel
Route::get('/admin/customers', [AdminController::class, 'customers']);

// Show Admin Panel
Route::get('/admin/edit-products', [AdminController::class, 'editProducts']);

// Show Admin Panel
Route::get('/admin/orders', [AdminController::class, 'orders']);

// Show Admin Panel
Route::get('/admin/suncraft-products', [AdminController::class, 'suncraftProducts']);

// Show Admin Panel
Route::get('/admin/category', [AdminController::class, 'category']);

// Show Admin Panel
Route::get('/admin/products', [AdminController::class, 'products']);


// Route::get('/pay', [PayController::class, 'stk']);

Route::get('/pay', [PayController::class, 'pay']);