@extends('layouts.main')

@section('app')
    <div class="container" style="padding: 0 8rem;">
        <div class="card px-3 py-2">
            <span class="mt-4">
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
            </span>
        </div>
    </div>
    @include('components.listProducts')
@endsection
