<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\userController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::patch('/products/{product}/toggle-special', [ProductController::class, 'toggleSpecial'])
    ->name('products.toggle-special');


    Route::resource('categories', CategoryController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('users', userController::class);


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
