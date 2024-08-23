<?php

use App\Http\Controllers\AdminRegistrationController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileSettingsController;
use App\Http\Controllers\SubCategoryController;
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

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function() {
    Route::get('/', [BackendController::class, 'dashboard'])->name('dashboard');

    Route::prefix('user')->group(function() {
        Route::get('/settings', [ProfileSettingsController::class, 'settings'])->name('settings');
        Route::post('/update-profile-info', [ProfileSettingsController::class, 'update_profile_info'])->name('update.profile.info');
        Route::post('/update-password', [ProfileSettingsController::class, 'update_password'])->name('update.password');

        Route::get('/customers', [AdminUsersController::class, 'admin_customers'])->name('admin.customers');
        Route::get('/sellers', [AdminUsersController::class, 'admin_sellers'])->name('admin.sellers');
        Route::get('/admins', [AdminUsersController::class, 'admin_admins'])->name('admin.admins');
        Route::get('/delete-admin/{id}', [AdminUsersController::class, 'delete'])->name('delete.user');

        Route::get('/admin-registration', [AdminRegistrationController::class, 'admin_registration'])->name('admin.registration');
        Route::post('/add-admin', [AdminRegistrationController::class, 'add_admin'])->name('add.admin');
    });

    Route::prefix('category')->group(function() {
        Route::get('/', [CategoryController::class, 'category'])->name('category');
        Route::post('/store-category', [CategoryController::class, 'store'])->name('store.category');
        Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
        Route::get('/delete-categories/{id}', [CategoryController::class, 'delete'])->name('delete.category');

        Route::prefix('subcategory')->group(function() {
            Route::get('/', [SubCategoryController::class, 'subcategory'])->name('subcategory');
            Route::post('/store-subcategory', [SubCategoryController::class, 'store'])->name('store.subcategory');
            Route::get('/subcategories', [SubCategoryController::class, 'subcategories'])->name('subcategories');
            Route::get('/delete-subcategories/{id}', [SubCategoryController::class, 'delete'])->name('delete.subcategory');
        });
    });

    Route::prefix('product')->group(function() {
        Route::get('/', [ProductController::class, 'product'])->name('product');
        Route::post('/store-product', [ProductController::class, 'store'])->name('store.product');
        Route::get('/products', [ProductController::class, 'products'])->name('products');
        Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete.product');
    });
});
Route::post('/get-subcategory', [ProductController::class, 'get_subcategory']);
