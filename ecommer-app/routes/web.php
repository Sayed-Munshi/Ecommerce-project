<?php

use App\Http\Controllers\CartCheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerOrderStatus;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FrontendProductController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Frontend Area
*/
Route::get('/', [FrontendController::class, "home"])->name('home');

Route::prefix('customer')->group(function() {
    Route::get('/signup', [SignupController::class, "customer_signup"])->name('customer.signup');
    Route::post('/store', [SignupController::class, "store_customer"])->name('store.customer');
});

Route::prefix('seller')->group(function() {
    Route::get('/signup', [SignupController::class, "seller_signup"])->name('seller.signup');
    Route::post('/store', [SignupController::class, "store_seller"])->name('store.seller');
});

Route::prefix('user')->middleware(['auth', 'verified', 'customer'])->group(function() {
    Route::get('/dashboard', [UserProfileController::class, "user_profile"])->name('user.profile');
});

Route::prefix('products')->group(function(){
    Route::get('/{slug}', [FrontendProductController::class, 'single_product'])->name('single.product');
});

Route::prefix('cart')->middleware(['auth', 'verified', 'customer'])->group(function() {
    Route::get('/', [CartController::class, 'cart'])->name('cart');
    Route::post('/store/{id}', [CartController::class, 'store_cart'])->name('store.cart');
    Route::get('/delete/{id}', [CartController::class, 'delete_cart'])->name('delete.cart');
    Route::post('/update', [CartController::class, 'update_cart'])->name('update.cart');

    Route::prefix('checkout')->middleware(['auth', 'verified', 'customer'])->group(function() {
        Route::get('/', [CartCheckoutController::class, 'checkout'])->name('checkout');
        Route::post('/store', [CartCheckoutController::class, 'checkout_store'])->name('checkout.store');
    });
});

Route::prefix('order')->middleware(['auth', 'verified', 'customer'])->group(function() {
    Route::get('/placed', [CustomerOrderStatus::class, 'order_placed'])->name('order.placed');
    Route::get('/list', [CustomerOrderStatus::class, 'order_list'])->name('order.list');
    Route::get('/{order_id}', [CustomerOrderStatus::class, 'order_status'])->name('order.status');
});

require __DIR__.'/auth.php';
