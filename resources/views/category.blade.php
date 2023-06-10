@extends('layouts.main')

@section('app')
    <div class="d-none">{{ $i = 1 }}</div>
    <main class="container">
        <h1 class="my-3 fs-5 text-secondary">Semua Kategori: </h1>
        <div class="flex justify-content-start">
            @foreach ($categories as $category)
                <a href="/product/category/{{ $category->slug }}" class="text-decoration-none">
                    <div class="category fs-6 fw-bold text-success border border-radius-2 mb-2 px-2 rounded"
                        style="height: 40px">
                        <p class="pt-2">{{ $i++ }}. {{ $category->name }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </main>
@endsection
