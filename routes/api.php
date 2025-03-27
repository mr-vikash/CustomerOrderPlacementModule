<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CartController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/get_connection_id',[AuthController::class,'get_connection_id']);
Route::post('/request_otp',[AuthController::class,'request_otp']);

Route::post('login',[AuthController::class,'login']);
Route::post('register_customer',[AuthController::class,'register_customer']);
Route::post('profile_details',[CustomerController::class,'profile_details']);

Route::post('place_order',[OrderController::class,'place_order']);
Route::post('cancel_order',[OrderController::class,'cancelOrder']);
Route::post('order_listing',[OrderController::class,'listOrders']);
Route::post('order_detail',[OrderController::class,'orderDetail']);
Route::post('product_listing',[ProductController::class,'listProducts']);
Route::post('get_product_detail',[ProductController::class,'getProductDetail']);

Route::post('show_cart_items',[CartController::class,'show_cart_items']);
Route::post('add_to_cart',[CartController::class,'addToCart']);

