<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\EditingProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.login');
});

Route::get('admin/login',function() {
    return view('admin.login');
});

Route::post('/admin/login',[AdminController::class,'loginPost'])->name('admin.loginPost');
Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');


Route::middleware(['admin'])->group(function ()
{
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/statistics',[AdminController::class,'statistics'])->name('admin.statistics');
});
//nqt: quan tri san pham
Route::get("/admin/listing/{model}",[ListingController::class,'index'])->name('listing.index');
Route::get("/admin/listing/{model}",[ListingController::class,'index'])->name('listing.index');
Route::get("/admin/editing/{model}",[EditingProductController::class,'create'])->name('editing.create');
Route::post("/admin/editing/{model}",[EditingProductController::class,'store'])->name('editing.store');

