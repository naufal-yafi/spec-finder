<style>
    .promo {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 35px;
        width: 50px;
        top: 8px;
        left: 8px;
    }
</style>
@php
    $now = \Carbon\Carbon::now();
    $duration = \Carbon\Carbon::parse($product->promo_duration);
    
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
<a href="/product/detail/{{ $product->slug }}" class="text-decoration-none text-dark">
    <div class="card" style="width: 18rem;">
        <div style="font-size: .7rem; color: green;">
            <img src="{{ url('/assets/mouse-blake-x17.webp') }}" class="card-img-top"
                alt="{{ $product->category->slug . '-' . $product->slug . '.specfinder' }}">
            @if ($product->promo != 0)
                @if ($result != 0)
                    <span class="me-2 fw-bold rounded p-2 position-absolute promo"
                        style="background: #d1e7dd; color: #198754; font-size: .8rem">{{ $product->promo }}%</span>
                @endif

            @endif
        </div>

        <div class="card-body">
            <p class="card-text mb-2">
                <img src="{{ url('/assets/fantech.jpg') }}" height="26px" alt="brand-logo" class="me-1">
                {{ substr($product->brand->name, 0, 20) . (strlen($product->brand->name) > 20 ? '...' : '') }}
            </p>
            <h5 class="card-title">
                {{ substr($product->title, 0, 35) . (strlen($product->title) > 35 ? '...' : '') }}
            </h5>
            <p class="card-text mb-2 d-flex justify-content-start">
                @if ($product->promo != 0)
                    @if ($result != 0)
                        <span class="d-flex flex-column">
                            <span class="fw-bold text-secondary text-decoration-line-through" style="font-size: .7rem">
                                <span>Rp.</span>
                                {{ number_format($product->price, 0, ',', '.') }}
                            </span>

                            <span class="fw-bold text-success">
                                <span style="font-size: .7rem;">
                                    Rp
                                </span>
                                @php
                                    $diskon = $product->price * ($product->promo / 100);
                                @endphp
                                <span class="fs-5">
                                    {{ number_format($product->price - $diskon, 0, ',', '.') }}
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
                                    {{ number_format($product->price, 0, ',', '.') }}
                                </span>
                            </span>
                            <span class="fw-bold text-white text-decoration-line-through" style="font-size: .7rem">
                                <span>.</span>
                                .
                            </span>
                        </span>
                    @endif
                @else
                    <span class="d-flex flex-column">
                        <span class="fw-bold text-success">
                            <span style="font-size: .7rem;">
                                Rp
                            </span>
                            <span class="fs-5">
                                {{ number_format($product->price, 0, ',', '.') }}
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
