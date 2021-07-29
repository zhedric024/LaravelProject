<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;



Route::get('/', function () {
    return view('welcome'); 
    
});
Route::view("home",'home');
Route::view("about",'about');
Route::resource('/categories',CategoryController::class);
Route::resource('/products',ProductController::class);
Route::resource('/orders',OrderController::class);




     
