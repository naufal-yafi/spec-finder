@php
    $categorySlug = $product->category->slug;
@endphp

<main class="container mt-4">
    <div class="card mb-5">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="border-right" style="font-size: .7rem; color: green;">
                    <img src="{{ url($product->image) }}" class="card-img"
                        alt="{{ $categorySlug . '-' . $product->slug . '.specfinder' }}" width="100%" height="100%">
                </div>
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title fs-5 fw-bold mb-2">{{ $product->title }}</h5>

                    <div class="row justify-content-start g-2">
                        <p class="col-auto text-dark mb-1">
                            Merek
                            <span class="text-secondary">(<a href="/search?brand={{ $product->brand->slug }}"
                                    class="text-secondary text-decoration-none">{{ $product->brand->name }}</a>)</span>
                        </p>
                        <p class="col-auto text-dark mb-1">
                            Kategori
                            <span class="text-secondary">(<a href="/search?category={{ $categorySlug }}"
                                    class="text-secondary text-decoration-none">{{ $product->category->name }}</a>)</span>
                        </p>
                        <p class="col-auto text-dark mb-1">
                            Ulasan
                            <span class="text-secondary">
                                <a href="#reviews" class="text-secondary text-decoration-none">(0)</a></span>
                        </p>
                    </div>

                    <p class="card-text mt-1 d-flex justify-content-start">
                        @if ($product->promo != 0)
                            <span class="d-flex flex-column">
                                <span class="fw-bold text-success">
                                    <span style="font-size: .7rem;">
                                        Rp
                                    </span>
                                    @php
                                        $diskon = $product->price * ($product->promo / 100);
                                    @endphp
                                    <span class="fs-3">
                                        {{ number_format($product->price - $diskon, 0, ',', '.') }}
                                    </span>
                                </span>

                                <span class="mt-2 mb-3">
                                    <span class="me-2 fw-bold rounded p-2"
                                        style="background: #d1e7dd; color: #198754; font-size: .8rem">{{ $product->promo }}%</span>
                                    <span class="fw-bold text-secondary text-decoration-line-through"
                                        style="font-size: .9rem">
                                        Rp{{ number_format($product->price, 0, ',', '.') }}
                                    </span>
                                </span>
                            </span>
                        @else
                            <span class="fw-bold text-success">
                                <span style="font-size: .7rem;">
                                    Rp
                                </span>
                                <span class="fs-3">
                                    {{ number_format($product->price, 0, ',', '.') }}
                                </span>
                            </span>
                            <span class="fw-bold text-white">
                                <span style="font-size: .5rem;">
                                    .
                                </span>
                                <span class="text-decoration-line-through" style="font-size: .7rem">
                                    .
                                </span>
                            </span>
                        @endif
                    </p>

                    <p class="card-text">
                        <a href="{{ $product->link }}" target="_blank">
                            <button class="btn btn-success px-4 w-100 py-2">
                                Beli Sekarang
                            </button>
                        </a>
                    </p>

                    <p class="card-text">
                    <h1 class="text-secondary mb-1 fs-6 fw-normal">Deskripsi</h1>

                    <p class="card-text short-description mb-0">
                        {!! substr($product['description'], 0, 150) . (strlen($product->description) > 150 ? '...' : '') !!}
                    </p>

                    <div class="collapse" id="deskripsi-lengkap">
                        <p class="card-text full-description">{!! $product->description !!}</p>

                        <p class="card-text d-flex flex-wrap gap-1 mb-2">
                            @foreach (str_replace(' ', '', explode(',', $product->tags)) as $tag)
                                <a href="/search?tag={{ $tag }}">
                                    <button class="btn btn-secondary btn-sm rounded-pill"
                                        style="font-size: .7rem">#{{ strtolower($tag) }}</button>
                                </a>
                            @endforeach
                        </p>
                    </div>

                    <a href="#deskripsi-lengkap" class="readmore-btn mb-2 text-success fw-semibold text-decoration-none"
                        data-toggle="collapse" role="button" aria-expanded="false" aria-controls="deskripsi-lengkap">
                        Baca Selengkapnya
                    </a>

                    <p class="mt-2">
                        <small
                            class="text-muted">{{ $product->created_at == $product->updated_at ? 'Diposting' : 'Diubah' }}
                            oleh
                            <a href="/search?author={{ $product->user->slug }}"
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
