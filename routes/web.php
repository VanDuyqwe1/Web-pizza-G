<?php


use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\BillController;
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


// Route::get('/', [ProductController::class, 'index']);

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('/', [CustomAuthController::class, 'dashboard']); 

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::get('voucher', [CustomAuthController::class, 'voucher'])->name('voucher');
Route::get('promotion', [CustomAuthController::class, 'promotion'])->name('promotion');
Route::get('menu', [CustomAuthController::class, 'menu'])->name('menu');
Route::get('orderTracking', [CustomAuthController::class, 'orderTracking'])->name('orderTracking');
Route::get('storeListing', [CustomAuthController::class, 'storeListing'])->name('storeListing');
Route::get('blog', [CustomAuthController::class, 'blog'])->name('blog');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//  Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tracking', [BillController::class, 'index']);
Route::get('/tracking/{slug}/{id_status}', [BillController::class, 'show'])->name('tracking_custom');
// Xem chi tiết
Route::get('/billdetail/{id_bill}', [BillController::class, 'bill_detail'])->name('bill_detail');



