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

<<<<<<< HEAD
Route::get('/tracking', [BillController::class, 'index']);
Route::get('/tracking/{slug}/{id_status}', [BillController::class, 'show'])->name('tracking_custom');
// Xem chi tiết
Route::get('/billdetail/{id_bill}', [BillController::class, 'bill_detail'])->name('bill_detail');

// route add cart cua Tien
Route::get('/', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

// route add product cua Tien
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

// route checkout cua Tai

Route::get('menu', 'CartController@index');  
Route::get('cart', 'CartController@cart')->name('cart');
Route::get('add-to-cart/{id}','CartController@addToCart')->name('add.to.cart');
Route::patch('update-cart', 'CartController@update')->name('update.cart');
Route::delete('remove-from-cart', 'CartController@remove')->name('remove.from.cart');


Route::get('checkout', 'CheckoutController@index');
//Route::delete('/destroyCart', 'CheckoutController@destroyCart');
Route::get('/login-checkout','CheckoutController@login_checkout');
Route::post('/add-customer','CheckoutController@add_customer');
Route::post('/login-customer','CheckoutController@login_customer');
Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');
Route::get('/logout-checkout','CheckoutController@logout_checkout');

