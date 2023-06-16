@php
    $Label = [
        'brand' => $label == 'Brand' ?? false,
        'author' => $label == 'Author' ?? false,
    ];
    
    $Slug = [
        'brand' => $slug && $Label['brand'] ?? false,
        'author' => $slug && $Label['author'] ?? false,
    ];
    
    $class = $Slug['brand'] || $Slug['author'] ? 'mt-2' : 'ms-3 mt-3';
    
    $countProduct = $products->count();
    
    $index = 0;
    if ($Label['brand']) {
        $index = 1;
    } elseif ($Label['author']) {
        $index = 2;
    } else {
        $index = 0;
    }
    
    if ($Slug['author']) {
        $authorSlug = $author->slug;
    }
@endphp

<div class="container" style="padding: 0 9%;">
    <div class="card overflow-hidden">
        <div class="d-flex gap-4">
            <img src="{{ url('/assets/fantech.jpg') }}" height="130px" alt="{{ $slug }}">

            <span class="{{ $class }}">
                <h1 class="fs-5 fw-bold">{{ $label }}: {{ $name }}</h1>
                @if ($slug)
                    <p>Produk yang tersedia <span class="fw-bold text-secondary">({{ $countProduct }})</span></p>
                @else
                    <p>
                        <span class="me-2">
                            Produk <span class="fw-bold text-secondary">({{ $countProduct }})</span>
                        </span>
                        <span>
                            {{ $label }} <span class="fw-bold text-secondary">
                                ({{ $list[$index]->count() }})
                            </span>
                        </span>
                    </p>
                @endif
                @if ($Slug['brand'])
                    <a href="{{ $link }}">
                        <button class="btn btn-success">Kunjungi Toko</button>
                    </a>
                @endif

                @if ($Slug['author'])
                    <a href="/author/profile/{{ $authorSlug }}">
                        <button class="btn btn-success">Lihat Profil</button>
                    </a>
                @endif
            </span>
        </div>
    </div>
</div>
