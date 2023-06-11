<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function getBrand()
    {
        return view('slugView', [
            'title' => 'Produk Merek | SpecFinder',
            'back' => '/product',
            'products' => Product::inRandomOrder()->get(),
            'label' => 'Brand',
            'slug' => false,
            'name' => 'Semua',
            'listCategory' => Category::all(),
            'listBrand' => Brand::all(),
            'listAuthor' => User::all()
        ]);
    }

    public function getProductByBrand(Brand $brand)
    {
        return view('slugView', [
            'title' => 'Produk dari Merek ' . $brand->name . ' | SpecFinder',
            'back' => '/product',
            'products' => $brand->product,
            'brand' => $brand,
            'label' => 'Brand',
            'slug' => true,
            'name' => $brand->name,
            'listCategory' => Category::all(),
            'listBrand' => Brand::all(),
            'listAuthor' => User::all()
        ]);
    }
}
