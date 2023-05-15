<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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