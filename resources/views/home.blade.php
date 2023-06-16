@extends('layouts.main')

@section('app')
    @if ($banner != false)
        @include('components.bannerSlug')
    @endif

    @if ($products->count())
        @include('components.listProducts')
    @else
        <main class="text-center">
            <p class="mt-4">
                @if ($banner != false)
                    Maaf Produk dengan {{ $label }} {{ $name }} Belum Tersedia.
                @else
                    @if (request('brand'))
                        Maaf Produk dengan Brand {{ ucwords(str_replace('-', ' ', request('brand'))) }} Belum Tersedia.
                    @else
                        Maaf Produk Yang Kamu Cari Tidak Ditemukan.
                    @endif
                @endif
            </p>

            <a href="/"><button class="btn btn-success px-4">Kembali</button></a>
        </main>
    @endif
@endsection
