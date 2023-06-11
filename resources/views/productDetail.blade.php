@extends('layouts.main')

@section('app')
    @include('components.cardDetailProduct')

    <section class="mt-3 container">
        <span class="d-flex flex-row justify-content-between" style="padding: 0 9%">
            <p class="text-dark fw-bold">Rekomendasi {{ $product->category->name }}</p>

            <a href="/product/category/{{ $product->category->slug }}" class="fw-bold text-decoration-none text-success">Lihat
                Semua</a>
        </span>

        <div class="mt-3 d-flex justify-content-center align-items-center flex-wrap gap-2">
            @foreach ($recommends[0] as $product)
                @include('components.cardProduct')
            @endforeach
        </div>
    </section>

    <section class="mt-3 container">
        <span class="d-flex flex-row justify-content-between" style="padding: 0 9%; margin-top: 3rem">
            <p class="text-dark fw-bold">Produk Lainnya Dari {{ $brand_info[0] }}</p>

            <a href="/product/brand/{{ $brand_info[1] }}" class="fw-bold text-decoration-none text-success">Lihat
                Semua</a>
        </span>

        <div class="mt-3 d-flex justify-content-center align-items-center flex-wrap gap-2">
            @foreach ($recommends[1] as $product)
                @include('components.cardProduct')
            @endforeach
        </div>
    </section>

    <section class="mt-3 container">
        <span class="d-flex flex-row justify-content-between" style="padding: 0 9%; margin-top: 3rem">
            <p class="text-dark fw-bold">Rekomendasi Lainnya Dari {{ $author_info[0] }}</p>

            <a href="/product/user/{{ $author_info[1] }}" class="fw-bold text-decoration-none text-success">Lihat
                Semua</a>
        </span>

        <div class="mt-3 container d-flex justify-content-center align-items-center flex-wrap gap-2">
            @foreach ($recommends[2] as $product)
                @include('components.cardProduct')
            @endforeach
        </div>
    </section>

    <section class="mt-3 container">
        <span class="d-flex flex-row justify-content-between" style="padding: 0 9%; margin-top: 3rem">
            <p class="text-dark fw-bold">Rekomendasi Lainnya</p>

            <a href="/product" class="fw-bold text-decoration-none text-success">Lihat
                Semua</a>
        </span>

        @include('components.listProducts')
    </section>
@endsection
