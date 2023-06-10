<main class="mt-3 container d-flex justify-content-center align-items-center flex-wrap gap-2">
    @foreach ($products as $product)
        <a href="/product/{{ $product->slug }}" class="text-decoration-none text-dark">
            <div class="card" style="width: 18rem;">
                <div style="font-size: .7rem; color: green;">
                    <img src="{{ $product->image }}" class="card-img-top"
                        alt="{{ $product->category->slug . '-' . $product->slug . '.specfinder' }}">
                </div>

                <div class="card-body">
                    {{-- <p class="card-text mb-2">
                        <img src="{{ url('brand-logo/' . $product['brand_logo']) }}" height="26px" alt="brand-logo" class="me-1">
                        {{ substr($product["brand"], 0, 20) . (strlen($product["brand"]) > 20 ? '...' : '') }}
                    </p> --}}
                    <h5 class="card-title">
                        {{ substr($product->title, 0, 35) . (strlen($product->title) > 35 ? '...' : '') }}
                    </h5>
                    <p class="card-text mb-2">
                        <span class="fw-bold text-success" style="font-size: .7rem;">
                            Rp
                        </span>
                        <span class="fw-bold text-success">
                            {{ number_format($product->price, 0, ',', '.') }}
                        </span>
                    </p>
                </div>
            </div>
        </a>
    @endforeach
</main>
