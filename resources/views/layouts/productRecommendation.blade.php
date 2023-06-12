<section class="mt-3 container">
    <span class="d-flex flex-row justify-content-between" style="padding: 0 9%; margin-top: 3rem">
        @yield('config')

        <p class="text-dark fw-bold">{{ $title }}</p>

        <a href="{{ $link }}" class="fw-bold text-decoration-none text-success">Lihat
            Semua</a>
    </span>

    @yield('listProduct')
</section>
