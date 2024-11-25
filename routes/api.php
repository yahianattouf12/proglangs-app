<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $req) {
//     return $req->user();
// })->middleware('auth:sanctum');

Route::post('/user/login', [UserController::class, 'login'])->name('user.login'); 

Route::post('/user/register', [UserController::class, 'register'])->name('user.register');

Route::middleware('auth:sanctum')->post('/user/logout', [UserController::class, 'logout'])->name('user.logout');

//Routes for shops
Route::resource('shops', ShopController::class);


//Routes for products
Route::resource('products', ProductController::class);
Route::get('/products/showshopproducts/{id}', [ProductController::class,'showShopProducts']);