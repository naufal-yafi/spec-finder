<style>
    li a:hover {
        opacity: .7;
    }
</style>
<footer class="bg-light pt-5 pb-3 mt-4">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between mb-4 gap-3">
            <a href="{{ $back }}">
                <img src="{{ url('logo-type.svg') }}" height="35px" alt="">
            </a>

            <div class="">
                <a href="/login">
                    <button type="button" class="btn btn-outline-success fw-bold">
                        Masuk
                    </button>
                </a>
                <a href="/signup">
                    <button type="button" class="btn btn-success">
                        Daftar
                    </button>
                </a>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-md-2">
                <h5>Informasi</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="/about-us" class="text-decoration-none text-success">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="https://github.com/naufal-yafi/spec-finder/graphs/contributors" target="_blank"
                            class="text-decoration-none text-success">Developer</a>
                    </li>
                    <li><a href="https://github.com/naufal-yafi/spec-finder/activity" target="_blank"
                            class="text-decoration-none text-success">Aktifitas</a></li>
                    <li><a href="https://github.com/naufal-yafi/spec-finder/releases" target="_blank"
                            class="text-decoration-none text-success">Path Note</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5>Merek</h5>
                <ul class="list-unstyled">
                    @foreach ($listBrand as $brand)
                        <li><a href="/product/brand/{{ $brand->slug }}"
                                class="text-decoration-none text-success">{{ $brand->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-2">
                <h5>Kategori</h5>
                <ul class="list-unstyled">
                    @foreach ($listCategory as $category)
                        <li><a href="/product/category/{{ $category->slug }}"
                                class="text-decoration-none text-success">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-2">
                <h5>Author</h5>
                <ul class="list-unstyled">
                    @foreach ($listAuthor as $author)
                        <li><a href="/product/author/{{ $author->slug }}"
                                class="text-decoration-none text-success">{{ $author->username }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <hr />

        <div class="text-center text-dark">
            &copy; 2023 Spec Finder. All rights reserved.
        </div>
    </div>
</footer>
