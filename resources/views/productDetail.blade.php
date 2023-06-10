@extends('layouts.main')

@section('app')
    @include('components.cardDetailProduct')

    <section class="mt-3 container">
        <span class="d-flex flex-row justify-content-between" style="padding: 0 7.5rem">
            <p class="text-dark fw-bold">Rekomendasi {{ $product->category->name }} Lainnya</p>

            <a href="/product/category/{{ $product->category->slug }}" class="fw-bold text-decoration-none text-success">Lihat
                Semua</a>
        </span>

        <div class="mt-3 d-flex justify-content-center align-items-center flex-wrap gap-2">
            @foreach ($recommends_product_by_category as $product)
                @include('components.cardProduct')
            @endforeach
        </div>
    </section>

    <section class="mt-3 container">
        <span class="d-flex flex-row justify-content-between" style="padding: 0 7.5rem; margin-top: 3rem">
            <p class="text-dark fw-bold">Produk Lainnya Dari {{ $product->brand->name }}</p>

            <a href="/product/brand/{{ $product->brand->slug }}" class="fw-bold text-decoration-none text-success">Lihat
                Semua</a>
        </span>

        <div class="mt-3 d-flex justify-content-center align-items-center flex-wrap gap-2">
            @foreach ($recommends_product_by_brand as $product)
                @include('components.cardProduct')
            @endforeach
        </div>
    </section>

    <section class="mt-3 container">
        <span class="d-flex flex-row justify-content-between" style="padding: 0 7.5rem; margin-top: 3rem">
            <p class="text-dark fw-bold">Rekomendasi Lainnya Dari {{ $product->user->username }}</p>

            <a href="/product/user/{{ $product->user->slug }}" class="fw-bold text-decoration-none text-success">Lihat
                Semua</a>
        </span>

        <div class="mt-3 container d-flex justify-content-center align-items-center flex-wrap gap-2">
            @foreach ($recommends_product_by_user as $product)
                @include('components.cardProduct')
            @endforeach
        </div>
    </section>

    <section class="mt-3 container">
        <span class="d-flex flex-row justify-content-between" style="padding: 0 7.5rem; margin-top: 3rem">
            <p class="text-dark fw-bold">Rekomendasi Lainnya</p>

            <a href="/product" class="fw-bold text-decoration-none text-success">Lihat
                Semua</a>
        </span>

        @include('components.listProducts')
    </section>
@endsection
