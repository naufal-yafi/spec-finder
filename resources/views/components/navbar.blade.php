<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ $back }}">
                <img src="{{ url('logo-type.svg') }}" height="20px" alt="">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ $back }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/product/category">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/product/brand">Merek</a>
                    </li>
                </ul>

                <span class="navbar-text">
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
                </span>
            </div>
        </div>
    </nav>
</header>
