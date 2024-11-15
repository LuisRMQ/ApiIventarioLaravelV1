<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MovementController;
use App\Http\Controllers\UserController;



// Route::apiResource('categories', CategoryController::class);

// Route::apiResource('suppliers', SupplierController::class);

// Route::apiResource('products', ProductController::class);

// Route::apiResource('movements', MovementController::class);



Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'store']); 
Route::get('/categories/{id}', [CategoryController::class, 'show']); 
Route::put('/categories/{id}', [CategoryController::class, 'update']); 
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

Route::get('/suppliers', [SupplierController::class, 'index']); 
Route::post('/suppliers', [SupplierController::class, 'store']); 
Route::get('/suppliers/{id}', [SupplierController::class, 'show']); 
Route::put('/suppliers/{id}', [SupplierController::class, 'update']); 
Route::delete('/suppliers/{id}', [SupplierController::class, 'destroy']); 

Route::get('/products', [ProductController::class, 'index']); 
Route::post('/products', [ProductController::class, 'store']); 
Route::get('/products/{id}', [ProductController::class, 'show']); 
Route::put('/products/{id}', [ProductController::class, 'update']); 
Route::delete('/products/{id}', [ProductController::class, 'destroy']); 


Route::post('/register', [UserController::class, 'register']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
