<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'carts'], function () {
    Route::post('/add-cart', [CartController::class, 'addCartApi'])->name('add_cart_api');
    Route::post('/calculate-cart', [CartController::class, 'calculateCartApi'])->name('calculate_cart_api');
});
