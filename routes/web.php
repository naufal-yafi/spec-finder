<?php

use App\Http\Controllers\ProductController;
use App\Models\Brand;
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
Route::get('/product/detail', [ProductController::class, 'index']);
Route::get('/product/detail/{product:slug}', [ProductController::class, 'detail']);

Route::get('/product/category/{category:slug}', function (Category $category) {
  return view('slugView', [
    'title' => 'Produk dari Kategori ' . $category->name . ' | SpecFinder',
    'back' => '/',
    'products' => $category->product,
    'label' => 'Kategori',
    'slug' => true,
    'name' => $category->name,
    'listCategory' => Category::all(),
    'listBrand' => Brand::all()
  ]);
});

Route::get('/product/category', function () {
  return view('slugView', [
    'title' => 'Produk Kategori | SpecFinder',
    'back' => '/',
    'products' => Product::inRandomOrder()->get(),
    'label' => 'Kategori',
    'slug' => false,
    'name' => 'Semua',
    'listCategory' => Category::all(),
    'listBrand' => Brand::all()
  ]);
});

Route::get('/product/brand', function () {
  return view('slugView', [
    'title' => 'Produk Merek | SpecFinder',
    'back' => '/',
    'products' => Product::inRandomOrder()->get(),
    'label' => 'Brand',
    'slug' => false,
    'name' => 'Semua',
    'listCategory' => Category::all(),
    'listBrand' => Brand::all()
  ]);
});

Route::get('/product/brand/{brand:slug}', function (Brand $brand) {
  return view('slugView', [
    'title' => 'Produk dari Merek ' . $brand->name . ' | SpecFinder',
    'back' => '/',
    'products' => $brand->product,
    'brand' => $brand,
    'label' => 'Brand',
    'slug' => true,
    'name' => $brand->name,
    'listCategory' => Category::all(),
    'listBrand' => Brand::all()
  ]);
});

Route::get('/about-us', function () {
  return view('aboutUs', [
    'title' => 'Tentang Kami | SpecFinder',
    'back' => '/',
    'listCategory' => Category::all(),
    'listBrand' => Brand::all()
  ]);
});
