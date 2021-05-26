<?php

use App\Http\Controllers\ProductsController;
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
Route::get('/',[ProductsController::class,'index'])->name('product.index');
Route::get('/cart',[ProductsController::class,'cart'])->name('product.cart');
Route::get('/add-to-cart/{id}',[ProductsController::class,'addToCart'])->name('product.addtocart');
// Route::patch('update-cart', [ProductsController::class], 'update')->name('product.update');
// Route::post('remove-cart', [ProductsController::class], 'remove')->name('product.remove');