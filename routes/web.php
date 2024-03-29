<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Payment\PaymentController;

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



Auth::routes();

Route::get('/', function() {
    return view('welcome');
});

//home
Route::get('/home', [HomeController::class, 'index'])->name('user:home');
Route::get('/admin/home', [HomeController::class, 'admin'])->name('admin:home')->middleware('is.admin');


//user profile
Route::get('/user/profile/{user}', [UserController::class, 'show'])->name('user:show');
Route::get('/user/profile/edit/{user}', [UserController::class, 'edit'])->name('user:edit');
Route::post('/user/profile/update/{user}', [UserController::class, 'update'])->name('user:update');

//product Admin
Route::get('/product/index', [ProductController::class, 'index'])->name('product:index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product:create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product:store');
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product:edit');
Route::post('/product/update/{product}', [ProductController::class, 'update'])->name('product:update');
Route::get('/product/delete/{product}', [ProductController::class, 'destroy'])->name('product:destroy');

//order
Route::get('/order', [OrderController::class, 'index'])->name('order:index');
Route::get('/order/add-to-cart/{id}', [OrderController::class, 'addToCart'])->name('add:to:cart');
Route::patch('update-cart', [OrderController::class, 'update'])->name('update.cart');
Route::get('/order/remove-from-cart', [OrderController::class, 'remove'])->name('remove.from.cart');

//checkout
Route::post('/payment/success/', [PaymentController::class, 'store'])->name('payment:store');
Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment:create');

