<section class="mt-3 container">
    <span class="d-flex flex-row justify-content-between" style="padding: 0 9%; margin-top: 3rem">
        <p class="text-dark fw-bold">{{ $title }}</p>
        <a href="{{ $url }}" class="fw-bold text-decoration-none text-success">Lihat Semua</a>
    </span>

    <div class="mt-3 d-flex justify-content-center align-items-center flex-wrap gap-2">
        @if ($index == 'all')
            @include('components.listProducts')
        @else
            @foreach ($recommends[$index] as $product)
                @include('components.cardProduct')
            @endforeach
        @endif
    </div>
</section>
