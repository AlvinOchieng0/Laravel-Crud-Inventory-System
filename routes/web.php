<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [ProductsController::class,'index'])->name('products_index');
Route::get('/create', [ProductsController::class,'create'])->name('products_create');
Route::post('/store', [ProductsController::class,'store'])->name('products_store');

Route::get('/edit/{products}', [ProductsController::class,'edit'])->name('products_edit');
Route::post('/edit/{products}', [ProductsController::class,'save_update']);

Route::post('/delete/{products}', [ProductsController::class,'delete'])->name('products_delete');
Route::get('/update/{products}', [ProductsController::class,'update'])->name('products_update');
