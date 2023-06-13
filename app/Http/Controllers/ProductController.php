<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductController extends Controller
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

    public function index()
    {
        return view('home', [
            'title' => 'Temukan Hardware yang Tepat untuk Kebutuhan Anda dengan Mudah dan Cepat | SpecFinder',
            'products' => Product::with($this->table)->inRandomOrder()->get(),
            'list' => self::$list,
            'banner' => false
        ]);
    }

    public function detail(Product $product)
    {
        $getDataProduct = $product->load('category', 'brand', 'user');
        $brandName = $getDataProduct->brand->name;

        return view('productDetail', [
            'title' =>  $getDataProduct->category->name . ' ' . $getDataProduct->title . ' - ' . $brandName . ' | SpecFinder',
            'product' => $getDataProduct,
            'recommends' => [
                $this->recommendBy('category', $getDataProduct->category->slug),
                $this->recommendBy('brand', $getDataProduct->brand->slug),
                $this->recommendBy('user', $getDataProduct->user->slug)
            ],
            'products' => Product::with($this->table)
                ->whereNotIn('slug', [$getDataProduct->slug])
                ->inRandomOrder()
                ->limit(6)->get(),
            'list' => self::$list,
            'time' => $this->formatTime($getDataProduct->created_at, $getDataProduct->updated_at),
            'banner' => false
        ]);
    }

    private function recommendBy($relation, $value)
    {
        return Product::with($this->table)
            ->whereHas($relation, function ($query) use ($value) {
                $query->where('slug', $value);
            })
            ->inRandomOrder()
            ->limit(6)
            ->get();
    }

    private function formatTime($create, $update)
    {
        $dateNow = Carbon::now();
        $getTime = '';
        $result = '';

        if ($create == $update) {
            $getTime = $create;
        } else {
            $getTime = $update;
        }

        if ($getTime->isToday()) {
            $result = 'hari ini';
        } elseif ($getTime->isYesterday()) {
            $result = 'kemarin';
        } else {
            $result = $getTime->diffForHumans($dateNow) . ' hari yang lalu';
        }

        return $result;
    }
}
