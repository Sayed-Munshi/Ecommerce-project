<?php

use App\Http\Controllers\AdminRegistrationController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
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


/**
 * Backend Area
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
        Route::get('/delete-admin/{id}', [AdminUsersController::class, 'delete_admin'])->name('delete.admin');

        Route::get('/admin-registration', [AdminRegistrationController::class, 'admin_registration'])->name('admin.registration');
        Route::post('/add-admin', [AdminRegistrationController::class, 'add_admin'])->name('add.admin');
    });

    Route::prefix('category')->group(function() {
        Route::get('/', [CategoryController::class, 'category'])->name('category');
        Route::post('/add', [CategoryController::class, 'add_category'])->name('add.category');
        Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
        Route::get('/delete/{id}', [CategoryController::class, 'delete_category'])->name('delete.category');

        Route::prefix('subcategory')->group(function() {
            Route::get('/', [SubCategoryController::class, 'subcategory'])->name('subcategory');
            Route::post('/add', [SubCategoryController::class, 'add_subcategory'])->name('add.subcategory');
            Route::get('/subcategories', [SubCategoryController::class, 'subcategories'])->name('subcategories');
            Route::get('/delete/{id}', [SubCategoryController::class, 'delete_subcategory'])->name('delete.subcategory');
        });
    });

});
