@php
    use Carbon\Carbon;
    
    $now = Carbon::now();
    $duration = Carbon::parse($product->promo_duration);
    
    $year = 0;
    $month = 0;
    $day = 0;
    $result = 0;
    
    if (!($duration->year < $now->year)) {
        $year = $duration->year - $now->year;
    }
    
    if (!($duration->month < $now->month)) {
        $month = $duration->month - $now->month;
    }
    
    if (!($duration->month < $now->month)) {
        $month = $duration->month - $now->month;
    }
    
    if (!($duration->day < $now->day)) {
        $day = $duration->day - $now->day;
    }
    
    $result = $year + $month;
@endphp

@php
    $productSlug = $product->slug;
    $brandName = $product->brand->name;
    $productTitle = $product->title;
    $productPromo = $product->promo;
    $productPrice = $product->price;
    $brandSlug = $product->brand->slug;
    $conditionPromo = false;
    
    if ($productPromo != 0) {
        if ($result != 0) {
            $conditionPromo = true;
        }
    }
@endphp

<a href="/{{ $brandSlug }}/{{ $productSlug }}" class="text-decoration-none text-dark">
    <div class="card" style="width: 18rem;">
        <div style="font-size: .7rem; color: green;">
            <img src="{{ url('/assets/mouse-blake-x17.webp') }}" class="card-img-top"
                alt="{{ $brandSlug . '-' . $productSlug . '.specfinder' }}">
            @if ($conditionPromo)
                <span class="me-2 fw-bold rounded p-2 position-absolute d-flex justify-content-center align-items-center"
                    style="background: #d1e7dd; color: #198754; font-size: .8rem; height: 35px; width: 50px; top: 8px; left: 8px;">{{ $productPromo }}%</span>
            @endif
        </div>

        <div class="card-body">
            <p class="card-text mb-2">
                <img src="{{ url('/assets/fantech.jpg') }}" height="26px" alt="brand-logo" class="me-1">
                {{ substr($brandName, 0, 20) . (strlen($brandName) > 20 ? '...' : '') }}
            </p>
            <h5 class="card-title">
                {{ substr($productTitle, 0, 35) . (strlen($productTitle) > 35 ? '...' : '') }}
                <span class="text-white">
                    @if (strlen($productTitle) < 35)
                        @php
                            $minus = 35 - strlen($productTitle);
                        @endphp
                        @times($minus)
                            .
                        @endtimes
                    @endif
                </span>
            </h5>
            <p class="card-text mb-2 d-flex justify-content-start">
                @if ($conditionPromo)
                    <span class="d-flex flex-column">
                        <span class="fw-bold text-secondary text-decoration-line-through" style="font-size: .7rem">
                            <span>Rp.</span>
                            {{ number_format($productPrice, 0, ',', '.') }}
                        </span>

                        <span class="fw-bold text-success">
                            <span style="font-size: .7rem;">
                                Rp
                            </span>
                            @php
                                $diskon = $productPrice * ($productPromo / 100);
                            @endphp
                            <span class="fs-5">
                                {{ number_format($productPrice - $diskon, 0, ',', '.') }}
                            </span>
                        </span>
                    </span>
                @else
                    <span class="d-flex flex-column">
                        <span class="fw-bold text-success">
                            <span style="font-size: .7rem;">
                                Rp
                            </span>
                            <span class="fs-5">
                                {{ number_format($productPrice, 0, ',', '.') }}
                            </span>
                        </span>
                        <span class="fw-bold text-white text-decoration-line-through" style="font-size: .7rem">
                            <span>.</span>
                            .
                        </span>
                    </span>
                @endif
            </p>
        </div>
    </div>
</a>
