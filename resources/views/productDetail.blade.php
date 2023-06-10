@extends('layouts.main')

@section('app')
    @include('components.cardDetailProduct')

    <p class="text-center text-secondary fw-bold">Produk Lainnya Dari Fantech</p>
    <p class="text-center text-secondary fw-bold">Rekomendasi {{ $product->category->name }}</p>
    @include('components.listProducts')
    <p class="text-center text-secondary fw-bold">Rekomendasi Lainnya Dari {{ $product->user->username }}</p>
@endsection
