<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
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

    public function getCategory()
    {
        return view('slugView', [
            'title' => 'Semua Kategori | SpecFinder',
            'back' => '/product',
            'products' => Product::with($this->table)->inRandomOrder()->get(),
            'label' => 'Kategori',
            'slug' => false,
            'name' => 'Semua',
            'list' => self::$list
        ]);
    }

    public function getProductByCategory(Category $category)
    {
        $categoryName = $category->name;

        return view('slugView', [
            'title' => 'Kategori ' . $categoryName . ' | SpecFinder',
            'back' => '/product',
            'products' => $category->product,
            'label' => 'Kategori',
            'slug' => true,
            'name' => $categoryName,
            'list' => self::$list
        ]);
    }
}
