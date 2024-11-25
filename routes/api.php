<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $req) {
//     return $req->user();
// })->middleware('auth:sanctum');

Route::post('/user/login', [UserController::class, 'login'])->name('user.login'); 

Route::post('/user/register', [UserController::class, 'register'])->name('user.register');

Route::middleware('auth:sanctum')->post('/user/logout', [UserController::class, 'logout'])->name('user.logout');