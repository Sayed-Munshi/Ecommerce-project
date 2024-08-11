<?php

use App\Http\Controllers\FrontendController;
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

/**
 * Backend Area
*/
Route::middleware(['auth', 'verified'])->group(function() {

});

require __DIR__.'/auth.php';
