<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Temukan Hardware yang Tepat untuk Kebutuhan Anda dengan Mudah dan Cepat | SpecFinder',
            'products' => Product::all()
        ]);
    }

    public function detail(Product $product)
    {
        return view('productDetail', [
            'title' =>  $product->category->name . ' ' . $product->title . ' - ' . 'brand name' . ' | SpecFinder',
            'product' => $product
        ]);
    }
}
