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

        return view('productDetail', [
            'title' =>  $product->category->name . ' ' . $product->title . ' - ' . $product->brand->name . ' | SpecFinder',
            'product' => $product,
            'products' => Product::all(),
            'listCategory' => Category::all(),
            'listBrand' => Brand::all(),
            'back' => '/product',
            'time' => $result
        ]);
    }
}
