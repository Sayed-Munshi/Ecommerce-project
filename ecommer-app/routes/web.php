<?php

use App\Http\Controllers\CartCheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerOrderStatus;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FrontendProductController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\StripePaymentController;
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

Route::prefix('products')->group(function(){
    route::get('/vendor-products', [FrontendProductController::class, 'getProductsByVendor'])->name('vendor.products');
    route::get('/search-products', [FrontendProductController::class, 'searchProducts'])->name('search.products');
    Route::get('/{slug}', [FrontendProductController::class, 'single_product'])->name('single.product');
    Route::post('/review/{id}', [ProductReviewController::class, 'product_review'])->name('product.review');
});

Route::prefix('user')->middleware(['auth', 'verified', 'customer'])->group(function() {
    Route::get('/dashboard', [UserProfileController::class, "user_profile"])->name('user.profile');
    route::post('/update', [UserProfileController::class, 'update'])->name('user.update');

    Route::prefix('download')->group(function() {
        Route::post('/invoice/{id}', [PDFController::class, 'download_invoice'])->name('download.invoice');
    });
});

Route::prefix('cart')->middleware(['auth', 'verified', 'customer'])->group(function() {
    Route::get('/', [CartController::class, 'cart'])->name('cart');
    route::post('/add/ajax', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/store/{id}', [CartController::class, 'store_cart'])->name('store.cart');
    Route::get('/delete/{id}', [CartController::class, 'delete_cart'])->name('delete.cart');
    Route::post('/update', [CartController::class, 'update_cart'])->name('update.cart');

    Route::prefix('checkout')->group(function() {
        Route::get('/', [CartCheckoutController::class, 'checkout'])->name('checkout');
        Route::post('/store', [CartCheckoutController::class, 'checkout_store'])->name('checkout.store');

        Route::prefix('payment')->group(function() {
            Route::get('/stripe', [StripePaymentController::class, 'stripe'])->name('stripe.payment');
            Route::post('/stripe-post', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
        });
    });
});

Route::prefix('order')->middleware(['auth', 'verified', 'customer'])->group(function() {
    Route::get('/placed', [CustomerOrderStatus::class, 'order_placed'])->name('order.placed');
    Route::get('/{id}', [CustomerOrderStatus::class, 'order_status'])->name('order.status');
    Route::get('/track/{id}', [CustomerOrderStatus::class, 'order_track'])->name('order.track');
});

Route::prefix('pages')->group(function() {
    Route::get('/about-us', [FrontendController::class, 'about'])->name('about.us');
    Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact.us');
});

require __DIR__.'/auth.php';
