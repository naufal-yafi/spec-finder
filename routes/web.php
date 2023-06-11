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
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/detail', [ProductController::class, 'index']);
Route::get('/product/detail/{product:slug}', [ProductController::class, 'detail']);

Route::get('/product/category', [CategoryController::class, 'getCategory']);
Route::get('/product/category/{category:slug}', [CategoryController::class, 'getProductByCategory']);

Route::get('/product/brand', [BrandController::class, 'getBrand']);
Route::get('/product/brand/{brand:slug}', [BrandController::class, 'getProductByBrand']);

Route::get('/product/author', [UserController::class, 'getAuthor']);
Route::get('/product/author/{author:slug}', [UserController::class, 'getProductByAuthor']);

Route::get('/about-us', function () {
  return view('aboutUs', [
    'title' => 'Tentang Kami | SpecFinder',
    'back' => '/',
    'listCategory' => Category::all(),
    'listBrand' => Brand::all(),
    'listAuthor' => User::all()
  ]);
});
