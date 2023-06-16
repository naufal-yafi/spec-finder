<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
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

Route::get('/', [ProductController::class, 'index']);
Route::get('/search', [ProductController::class, 'index'])->middleware('empty.search');

Route::get('/login', function () {
  return view('errors.503');
});

Route::get('/signup', function () {
  return view('errors.503');
});

Route::get('/{brandSlug}/{product:slug}', [ProductController::class, 'detail']);
Route::get('/{brand:slug}', [BrandController::class, 'getProductByBrand']);
