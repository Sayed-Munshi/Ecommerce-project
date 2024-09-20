<?php

use App\Http\Controllers\AdminRegistrationController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileSettingsController;
use App\Http\Controllers\SellerOrderController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\VendorController;
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

Route::prefix('dashboard')->middleware(['auth', 'verified','sellerOrAdmin'])->group(function() {
    Route::get('/', [BackendController::class, 'dashboard'])->name('dashboard');

    Route::prefix('user')->group(function() {
        Route::get('/settings', [ProfileSettingsController::class, 'settings'])->name('settings');
        Route::post('/update-profile-info', [ProfileSettingsController::class, 'update_profile_info'])->name('update.profile.info');
        Route::post('/update-password', [ProfileSettingsController::class, 'update_password'])->name('update.password');

        Route::middleware(['auth', 'verified', 'admin'])->group(function() {
            Route::get('/customers', [AdminUsersController::class, 'admin_customers'])->name('admin.customers');
            Route::get('/sellers', [AdminUsersController::class, 'admin_sellers'])->name('admin.sellers');
            Route::get('/admins', [AdminUsersController::class, 'admin_admins'])->name('admin.admins');
            Route::get('/delete-admin/{id}', [AdminUsersController::class, 'delete'])->name('delete.user');

            Route::get('/admin-registration', [AdminRegistrationController::class, 'admin_registration'])->name('admin.registration');
            Route::post('/add-admin', [AdminRegistrationController::class, 'add_admin'])->name('add.admin');
        });
    });

    Route::prefix('vendor')->middleware(['auth', 'verified', 'admin'])->group(function() {
        Route::get('/', [VendorController::class, 'index'])->name('admin.vendors');
        Route::get('/create', [VendorController::class, 'create'])->name('vendor.create');
        Route::post('/store-vendor', [VendorController::class, 'store'])->name('store.vendor');
        Route::get('/vendor.edit/{id}', [VendorController::class, 'edit'])->name('vendor.edit');
        route::put('/vendor/{id}', [VendorController::class, 'update'])->name('vendor.update');
        Route::DELETE('/vendor.destroy/{id}', [VendorController::class, 'delete'])->name('vendor.destroy');
    });

    Route::prefix('category')->middleware(['auth', 'verified', 'admin'])->group(function() {
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

    Route::prefix('product')->middleware(['auth', 'verified','sellerOrAdmin'])->group(function() {
        Route::get('/', [ProductController::class, 'product'])->name('product');
        Route::post('/store-product', [ProductController::class, 'store'])->name('store.product');
        Route::get('/products', [ProductController::class, 'products'])->name('products');
        Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete.product');

        Route::prefix('orders')->group(function() {
            Route::get('/', [SellerOrderController::class, 'order_list'])->name('orders.list');
            Route::post('/update-status/{id}', [SellerOrderController::class, 'updateStatus'])->name('order.updateStatus');
            Route::get('/track/{id}', [SellerOrderController::class, 'order_track'])->name('order.track');
            Route::get('/view/{id}', [SellerOrderController::class, 'order_view'])->name('order.view');
            Route::get('/received/{id}', [SellerOrderController::class, 'order_received'])->name('order.received');
            Route::get('/canceled/{id}', [SellerOrderController::class, 'order_canceled'])->name('order.canceled');
            Route::get('/shipped/{id}', [SellerOrderController::class, 'order_shipped'])->name('order.shipped');
            Route::get('/delivered/{id}', [SellerOrderController::class, 'order_delivered'])->name('order.delivered');
        });
    });

});
Route::post('/get-subcategory', [ProductController::class, 'get_subcategory']);
