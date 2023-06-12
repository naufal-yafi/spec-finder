<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private static $list;
    private $table = ['category', 'brand', 'user'];

    public function __construct()
    {
        self::$list = [
            Category::all(),
            Brand::all(),
            User::where('is_admin', 1)->get()
        ];
    }

    public function getBrand()
    {
        return view('slugView', [
            'title' => 'Semua Merek | SpecFinder',
            'back' => '/product',
            'products' => Product::with($this->table)->inRandomOrder()->get(),
            'label' => 'Brand',
            'slug' => false,
            'name' => 'Semua',
            'list' => self::$list
        ]);
    }

    public function getProductByBrand(Brand $brand)
    {
        $brandName = $brand->name;

        return view('slugView', [
            'title' => 'Produk dari Merek ' . $brandName . ' | SpecFinder',
            'back' => '/product',
            'products' => $brand->product,
            'brand' => $brand,
            'label' => 'Brand',
            'slug' => true,
            'name' => $brandName,
            'list' => self::$list
        ]);
    }
}