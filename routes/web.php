<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewProductController;
use App\Http\Controllers\FloatingNewController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/introduc', function(){
    return view('client.introduc');
})->name('introduc');
Route::get('/new_products', [NewProductController::class, 'index'])->name('new_products');
Route::get('/news', [FloatingNewController::class, 'index'])->name('news'); 
Route::get('/contact', [ContactController::class, 'index'])->name('contact'); 

Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('products');
    // Route::get('/category{id}', [ProductController::class, 'getCategoryProducts'])->name('products');
    Route::get('/category/{id}', [ProductController::class, 'getCategoryProducts'])->name('category.product');

});

// Route::group(['prefix' => 'cart', 'as' => 'cart.'], function () {
//     Route::get('/', [CartController::class, 'index'])->name('index');
//     Route::post('/{product_id}/add', [CartController::class, 'addCart'])->name('add-cart');
//     Route::put('/{product_id}/update-quantity', [CartController::class, 'updateQuantity'])->name('update-quantity');
//     Route::delete('/{product_id}/remove-product', [CartController::class, 'removeProduct'])->name('remove-product');

//     // Tạo route để nhập thông tin địa chỉ Người mua hàng + submit Form địa chỉ người mua hàng
//     Route::get('/shipping-information', [CartController::class, 'shippingInformation'])
//         ->name('checkout.shipping-information');

//     // Route for checkout-order
//     Route::post('/checkout-order', [CartController::class, 'checkoutOrder'])
//         ->name('checkout.order');

//     // Route for thank-you
//     Route::get('/thank-you', [CartController::class, 'thankYou'])
//         ->name('checkout.thank-you');


//     // Route for Checkout
//     Route::group(['prefix' => 'checkout', 'as' => 'checkout.', 'middleware' => 'check_empty_cart'], function () {
//         // Route for shipping-information
//         Route::get('/shipping-information', [CartController::class, 'shippingInformation'])->name('shipping-information');
//         Route::post('/handle-shipping-information', [CartController::class, 'handleShippingInformation'])->name('handle-shipping-information');

//         // Route for payment-method
//         Route::get('/payment-method', [CartController::class, 'paymentMethod'])->name('payment-method');

//         // Route for checkout-order
//         Route::post('/checkout-order', [CartController::class, 'checkoutOrder'])->name('checkout-order');

//         // Route for thank-you
//         Route::get('/thank-you', [CartController::class, 'thankYou'])->name('thank-you');
//     });

//     // ajax process check and update quantity
//     Route::put('/{id}/ajax-update-quantity', [CartController::class, 'ajaxUpdateQuantity'])->name('ajax-update-quantity');

//     // ajax process check and remove product in session Cart
//     Route::delete('/{id}/ajax-remove-product-in-cart', [CartController::class, 'ajaxRemoveProductInCart'])->name('ajax-remove-product-in-cart');
// });