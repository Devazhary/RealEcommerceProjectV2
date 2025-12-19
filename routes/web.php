<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\userController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontStore\HomeController;
use App\Http\Controllers\FrontStore\ProductController as FrontStoreProductController;
use App\Http\Controllers\FrontStore\MessageController;
use App\Http\Controllers\FrontStore\FAQsController;
use App\Http\Controllers\FrontStore\OrderController as confirmOrderController;
use App\Http\Controllers\FrontStore\CartController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::patch('/products/{product}/toggle-special', [ProductController::class, 'toggleSpecial'])
    ->name('products.toggle-special');


    Route::resource('categories', CategoryController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('users', userController::class);


    
//front store
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/store/products', [FrontStoreProductController::class, 'index'])->name('storeProducts');
Route::get('/contact', [MessageController::class, 'index'])->name('contactForm');
Route::post('/contact', [MessageController::class, 'store'])->name('submitContactForm');
Route::get('/aboutUs', function () {
    return view('FrontStore.about');
})->name('aboutUs');
Route::get('/FAQs', [FAQsController::class, 'index'])->name('faqs');
Route::get('/confirmOrder/{totalPrice}', [confirmOrderController::class, 'index'])->name('confirmOrder');
Route::post('/confirmOrder/store', [confirmOrderController::class, 'store'])->name('submitOrder');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/test', function () {
    return view('adminDashboard.form-advanced');
});

require __DIR__.'/auth.php';

Route::get('/{page}', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.page');
