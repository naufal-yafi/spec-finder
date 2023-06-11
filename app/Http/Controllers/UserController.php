<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAuthor()
    {
        return view('slugView', [
            'title' => 'Produk Author | SpecFinder',
            'back' => '/product',
            'products' => Product::inRandomOrder()->get(),
            'label' => 'Author',
            'slug' => false,
            'name' => 'Semua',
            'listCategory' => Category::all(),
            'listBrand' => Brand::all(),
            'listAuthor' => User::all()
        ]);
    }

    public function getProductByAuthor(User $author)
    {
        return view('slugView', [
            'title' => 'Author ' . $author->username . ' | SpecFinder',
            'back' => '/product',
            'products' => $author->product,
            'author' => $author,
            'label' => 'Author',
            'slug' => true,
            'name' => $author->username,
            'listCategory' => Category::all(),
            'listBrand' => Brand::all(),
            'listAuthor' => User::all()
        ]);
    }
}
