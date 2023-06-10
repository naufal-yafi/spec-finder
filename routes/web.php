<?php

use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
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
Route::get('/product/detail/{product:slug}', [ProductController::class, 'detail']);

Route::get('/product/category/{slug}', function ($slug) {
  return $slug;
});

Route::get('/product/category', function () {
  return view('category', [
    'title' => 'Kategori untuk Semua Produk | SpecFinder',
    'back' => '/product',
    'categories' => Category::all()
  ]);
});

Route::get('/about-us', function () {
  return view('aboutUs', [
    'title' => 'Tentang Kami | SpecFinder',
    'back' => '/'
  ]);
});
