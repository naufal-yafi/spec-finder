<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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

    public function getAuthor()
    {
        return view('home', [
            'title' => 'Semua Author | SpecFinder',
            'products' => Product::with($this->table)->inRandomOrder()->get(),
            'label' => 'Author',
            'slug' => false,
            'name' => 'Semua',
            'list' => self::$list,
            'banner' => true
        ]);
    }

    public function getProductByAuthor(User $author)
    {
        $userName = $author->username;

        return view('home', [
            'title' => 'Author ' . $userName . ' | SpecFinder',
            'products' => $author->product,
            'author' => $author,
            'label' => 'Author',
            'slug' => true,
            'name' => $userName,
            'list' => self::$list,
            'banner' => true
        ]);
    }
}
