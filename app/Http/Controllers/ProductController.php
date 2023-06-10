<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Temukan Hardware yang Tepat untuk Kebutuhan Anda dengan Mudah dan Cepat | SpecFinder',
            'products' => Product::inRandomOrder()->get(),
            'listCategory' => Category::all(),
            'listBrand' => Brand::all(),
            'back' => '/'
        ]);
    }

    public function detail(Product $product)
    {
        $dateNow = Carbon::now();
        $getTime = '';
        $result = '';

        if ($product->created_at == $product->updated_at) {
            $getTime = $product->created_at;
        } else {
            $getTime = $product->updated_at;
        }

        if ($getTime->isToday()) {
            $result = 'hari ini';
        } elseif ($getTime->isYesterday()) {
            $result = 'kemarin';
        } else {
            $result = $getTime->diffForHumans($dateNow) . ' hari yang lalu';
        }

        $byCategory = Product::whereHas('category', function ($query) use ($product) {
            $query->where('slug', $product->category->slug);
        })->inRandomOrder()->limit(9)->get();

        $byBrand = Product::whereHas('brand', function ($query) use ($product) {
            $query->where('slug', $product->brand->slug);
        })->inRandomOrder()->limit(9)->get();

        $byUser = Product::whereHas('user', function ($query) use ($product) {
            $query->where('username', $product->user->username);
        })->inRandomOrder()->limit(9)->get();

        return view('productDetail', [
            'title' =>  $product->category->name . ' ' . $product->title . ' - ' . $product->brand->name . ' | SpecFinder',
            'product' => $product,
            'recommends_product_by_category' => $byCategory,
            'recommends_product_by_brand' => $byBrand,
            'recommends_product_by_user' => $byUser,
            'products' => Product::whereNotIn('slug', [$product->slug])->inRandomOrder()->limit(9)->get(),
            'listCategory' => Category::all(),
            'listBrand' => Brand::all(),
            'back' => '/product',
            'time' => $result
        ]);
    }
}
