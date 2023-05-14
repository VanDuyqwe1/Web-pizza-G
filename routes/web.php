<?php

use App\Http\Controllers\ProductController;
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
Route::get('thucdon', [ProductController::class, 'index']);
Route::get('thucdon/{id_category}', [ProductController::class, 'index']);
Route::get('thucdon/{id_category}', [ProductController::class, 'show'])->name('category-products-custom');

