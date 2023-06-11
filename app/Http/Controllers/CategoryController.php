<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory()
    {
        return view('slugView', [
            'title' => 'Produk Kategori | SpecFinder',
            'back' => '/product',
            'products' => Product::inRandomOrder()->get(),
            'label' => 'Kategori',
            'slug' => false,
            'name' => 'Semua',
            'listCategory' => Category::all(),
            'listBrand' => Brand::all(),
            'listAuthor' => User::all()
        ]);
    }

    public function getProductByCategory(Category $category)
    {
        return view('slugView', [
            'title' => 'Produk dari Kategori ' . $category->name . ' | SpecFinder',
            'back' => '/product',
            'products' => $category->product,
            'label' => 'Kategori',
            'slug' => true,
            'name' => $category->name,
            'listCategory' => Category::all(),
            'listBrand' => Brand::all(),
            'listAuthor' => User::all()
        ]);
    }
}
