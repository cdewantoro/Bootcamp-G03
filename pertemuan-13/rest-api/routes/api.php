<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Products
use App\Http\Controllers\ProductController;

Route::get('/products/list', [ProductController::class, 'index']);
Route::get('/products/show/{id}', [ProductController::class, 'show']);
Route::post('/products/add', [ProductController::class, 'store']);
Route::post('/products/edit/{id}', [ProductController::class, 'edit']);
Route::delete('/products/delete/{id}', [ProductController::class, 'delete']);
Route::get('/products/search/{nama}',[ProductController::class, 'search']);

