<main class="container mt-4">
    <div class="card mb-5">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="border-right" style="font-size: .7rem; color: green;">
                    <img src="{{ $product->image }}" class="card-img"
                        alt="{{ $product->category->slug . '-' . $product->slug . '.specfinder' }}">
                </div>
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title fs-5 fw-bold">{{ $product->title }}</h5>

                    <div class="row justify-content-start g-2">
                        <p class="col-auto text-dark mb-1">
                            Kategori
                            <span class="text-secondary">(<a href="/product/category/{{ $product->category->slug }}"
                                    class="text-secondary text-decoration-none">{{ $product->category->name }}</a>)</span>
                        </p>
                        <p class="col-auto text-dark mb-1">
                            Ulasan
                            <span class="text-secondary">
                                <a href="#reviews" class="text-secondary text-decoration-none">(0)</a></span>
                        </p>
                    </div>

                    <p class="card-text mt-1">
                        <span class="fw-bold text-success" style="font-size: .9rem;">
                            Rp
                        </span>
                        <span class="fw-bold text-success fs-3">
                            {{ number_format($product->price, 0, ',', '.') }}
                        </span>
                    </p>

                    <a href="{{ $product->link }}" target="_blank" class="btn btn-success px-4">
                        Beli Sekarang
                    </a>

                    <p class="card-text">
                        {{-- brand --}}
                        {{-- <a href="#">
                          <button class="btn btn-light btn-sm">
                              <img src="{{ url('brand-logo/' . $product['brand_logo']) }}" height="35px" alt="logo merek"
                                  class="me-1">
                          </button>
                      </a> --}}
                        {{-- brand --}}

                        {{-- Likes --}}
                        {{-- <a href="#">
                          <button class="btn btn-danger ms-2" style="font-size: .7rem;">
                              <img src="{{ url('icons/love.svg') }}" height="14px" alt="">
    
                              <span class="ms-1">
                                  Disukai
                                  {{ $product['likes'] >= 1000000 ? number_format($product['likes'] / 1000000, 1) . 'jt' : ($product['likes'] >= 1000 ? number_format($product['likes'] / 1000, 1) . 'rb' : $product['likes']) }}
                              </span>
                          </button>
                      </a> --}}
                        {{-- Likes --}}
                    </p>

                    <p class="card-text">
                    <h1 class="text-secondary mb-1 fs-6 fw-normal">Deskripsi</h1>

                    <p class="card-text short-description mb-0">
                        {!! substr($product['description'], 0, 150) . (strlen($product->description) > 150 ? '...' : '') !!}
                    </p>

                    <div class="collapse" id="deskripsi-lengkap">
                        <p class="card-text full-description">{!! $product->description !!}</p>

                        <p class="card-text d-flex flex-wrap gap-1 mb-2">
                            <a href="#">
                                <button class="btn btn-secondary btn-sm rounded-pill"
                                    style="font-size: .7rem">#{{ $product->category->slug }}</button>
                            </a>
                            {{-- <a href="#">
                              <button class="btn btn-secondary btn-sm rounded-pill"
                                  style="font-size: .7rem">#{{ strtolower($product['brand']) }}</button>
                          </a> --}}
                            @foreach (explode(',', $product['tags']) as $tag)
                                <button class="btn btn-secondary btn-sm rounded-pill"
                                    style="font-size: .7rem">#{{ strtolower($tag) }}</button>
                            @endforeach
                        </p>
                    </div>

                    <a href="#deskripsi-lengkap" class="readmore-btn mb-2 text-success fw-semibold text-decoration-none"
                        data-toggle="collapse" role="button" aria-expanded="false" aria-controls="deskripsi-lengkap">
                        Baca Selengkapnya
                    </a>

                    <p class="mt-2">
                        <small class="text-muted">Diposting oleh
                            <a href="/product/author/{{ $product->user->slug }}"
                                class="fw-bold text-decoration-none text-secondary">
                                ({{ $product->user->username }})
                            </a>
                            {{ $time }}</small>
                    </p>
                    </p>

                    <hr>

                    <p class="card-text">
                    <h1 class="text-secondary mb-1 fs-6 fw-normal">Spesifikasi</h1>

                    <ul>
                        @foreach (explode(',', $product->spesification) as $spec)
                            <li>{{ $spec }}</li>
                        @endforeach
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $(".readmore-btn").click(function() {
            if ($(".short-description").hasClass("d-none")) {
                $(".readmore-btn").html("Baca Selengkapnya");
                $(".short-description").removeClass("d-none");
            } else {
                $(".readmore-btn").html("Baca Lebih Sedikit");
                $(".short-description").addClass("d-none");
            }
        });
    });
</script>
