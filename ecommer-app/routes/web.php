<?php

use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\FrontendController;
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

Route::get('/signup', [SignupController::class, "customer_signup"])->name('customer.signup');
Route::get('/seller-signup', [SignupController::class, "seller_signup"])->name('seller.signup');
Route::post('/store', [SignupController::class, "store_customer"])->name('store.customer');
Route::post('/store', [SignupController::class, "store_seller"])->name('store.seller');

Route::prefix('user')->middleware(['auth', 'verified', 'customer'])->group(function() {
    Route::get('/dashboard', [UserProfileController::class, "user_profile"])->name('user.profile');
});

require __DIR__.'/auth.php';
