@extends('layouts.main')

@section('app')
    <h1>{{ $product->title }}</h1>
    <h4>{{ $product->price }}</h4>
    <p>Category:
        <a href="/product/category/{{ $product->category->slug }}">{{ $product->category->name }}</a>
    </p>
    <p>Deskripsi: {!! $product->description !!}</p>
@endsection
