@extends('layouts.main')

@section('app')
    <div class="container" style="padding: 0 9%;">
        <div class="card overflow-hidden">
            <div class="d-flex gap-4">
                @if ($slug && $label == 'Brand')
                    <img src="{{ url('/assets/fantech.jpg') }}" height="130px" alt="{{ $brand->slug }}">
                @endif

                <span class="{{ $label != 'Brand' || !$slug ? 'ms-3 mt-3' : 'mt-2' }}">
                    <h1 class="fs-5 fw-bold">{{ $label }}: {{ $name }}</h1>
                    @if ($slug)
                        <p>Produk yang tersedia <span class="fw-bold text-secondary">({{ $products->count() }})</span></p>
                    @else
                        <p>
                            <span class="me-2">
                                Produk <span class="fw-bold text-secondary">({{ $products->count() }})</span>
                            </span>
                            <span>
                                {{ $label }} <span class="fw-bold text-secondary">
                                    @if ($label == 'Kategori')
                                        ({{ $listCategory->count() }})
                                    @else
                                        ({{ $listBrand->count() }})
                                    @endif
                                </span>
                            </span>
                        </p>
                    @endif
                    @if ($slug && $label == 'Brand')
                        <a href="{{ $brand->link }}">
                            <button class="btn btn-success">Kunjungi Toko</button>
                        </a>
                    @endif
                </span>
            </div>
        </div>
    </div>
    @include('components.listProducts')
@endsection
