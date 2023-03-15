<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FloatingNewController;
use App\Http\Controllers\ProductController;

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


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/introduc', function(){
    return view('client.introduc');
})->name('introduc');
// Route::get('/new_products', [NewProductController::class, 'index'])->name('new_products');
Route::get('/news', [FloatingNewController::class, 'index'])->name('news'); 
Route::get('/contact', [ContactController::class, 'index'])->name('contact'); 


Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('products');
    Route::get('/detail/{id}',[ProductController::class, 'getProductDetail'])->name('detail_product'); 
    Route::get('/search',[ProductController::class, 'search'])->name('search');

});

Route::group(['prefix' => 'cart', 'middleware' => 'auth'], function () {
    Route::get('/', [CartController::class, 'showCart'])->name('cart');
    Route::post('/add/{id}', [CartController::class, 'addCart'])->name('add_cart');
    Route::put('/update_quantity/{product_id}', [CartController::class, 'updateQuantity'])->name('update_quantity');
    Route::get('/remove_product/{product_id}', [CartController::class, 'removeProduct'])->name('remove_product');

  
});

Route::group(['prefix' => 'checkout', 'as' => 'checkout.'], function () {
    Route::get('/', [CartController::class, 'showCheckoutCart'])->name('show');
    // Route::post('/', [CartController::class, 'checkoutCart'])->name('store_checkout');
});
