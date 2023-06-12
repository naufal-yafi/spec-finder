@extends('layouts.main')
@section('app')
    @include('components.cardDetailProduct')

    @php
        $config = [
            'category' => [
                'title' => 'Rekomendasi ' . $product->category->name,
                'url' => '/product/category/' . $product->category->slug,
                'index' => 0,
            ],
            'brand' => [
                'title' => 'Produk Lainnya dari ' . $product->brand->name,
                'url' => '/product/brand/' . $product->brand->slug,
                'index' => 1,
            ],
            'author' => [
                'title' => 'Rekomendasi dari ' . $product->user->username,
                'url' => '/product/author/' . $product->user->slug,
                'index' => 2,
            ],
            'all' => [
                'title' => 'Rekomendasi Lainnya',
                'url' => '/product',
                'index' => 'all',
            ],
        ];
    @endphp

    @include('components.listRecommendation', $config['category'])
    @include('components.listRecommendation', $config['brand'])
    @include('components.listRecommendation', $config['author'])
    @include('components.listRecommendation', $config['all'])
@endsection
