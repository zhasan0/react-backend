<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/productList', [ProductController::class, 'index'])->name('productList');
Route::any('/addProduct', [ProductController::class, 'store'])->name('addProduct');
Route::get('/editProduct/{id}', [ProductController::class, 'edit'])->name('editProduct');
Route::any('/updateProduct/{id}', [ProductController::class, 'update'])->name('updateProduct');
Route::delete('/productDelete/{id}', [ProductController::class, 'destroy'])->name('deleteProduct');
