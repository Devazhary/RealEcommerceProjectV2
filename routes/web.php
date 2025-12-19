<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


/*
|--------------------------------------------------------------------------
| Public / Guest Routes
|--------------------------------------------------------------------------
*/

// الصفحة الرئيسية - يمكن تحويلها تلقائيًا للـ dashboard إذا مسجل دخول
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// ملفات auth الخاصة بـ Breeze (login, register, password reset)
require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| Protected Routes (Authenticated Users Only)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile
    Route::controller(ProfileController::class)->prefix('profile')->as('profile.')->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::patch('/', 'update')->name('update');
        Route::delete('/', 'destroy')->name('destroy');
    });



    // Products
    Route::resource('products', ProductController::class);
    Route::patch('/products/{product}/toggle-special', [ProductController::class, 'toggleSpecial'])
        ->name('products.toggle-special');

    // Categories
    Route::resource('categories', CategoryController::class);

    // Orders
    Route::resource('orders', OrderController::class);
    Route::patch('orders/{order}/update-status', [OrderController::class, 'updateStatus'])
        ->name('orders.update-status');

    Route::get('orders-pending', [OrderController::class, 'pending'])->name('orders.pending');
    Route::get('orders-delivered', [OrderController::class, 'delivered'])->name('orders.delivered');
    Route::get('orders-processing', [OrderController::class, 'processing'])->name('orders.processing');
    Route::get('orders-shipped', [OrderController::class, 'shipped'])->name('orders.shipped');
    Route::get('orders-cancelled', [OrderController::class, 'cancelled'])->name('orders.cancelled');

    // Users
    Route::resource('users', UserController::class);

    // FAQs
    Route::resource('faqs', FaqController::class);

    // Messages
    Route::resource('messages', MessageController::class);
    Route::post('messages/{messages}/mark-as-read', [MessageController::class, 'markAsRead'])
        ->name('messages.markAsRead');


    // Admin / Pages
    Route::get('/{page}', [AdminController::class, 'index'])->name('admin.page');
});

/*
|--------------------------------------------------------------------------
| Test Route (Optional)
|--------------------------------------------------------------------------
*/
Route::get('/test', function () {
    return view('adminDashboard.form-advanced');
});
