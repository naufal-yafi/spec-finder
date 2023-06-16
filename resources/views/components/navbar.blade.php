<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ url('logo-type.svg') }}" height="20px" alt="">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kategori
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/">Semua Kategori</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            @foreach ($list[0] as $category)
                                <li><a class="dropdown-item"
                                        href="/search?category={{ $category->slug }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Merek
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/">Semua Merek</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            @foreach ($list[1] as $brand)
                                <li><a class="dropdown-item"
                                        href="/{{ $brand->slug }}?brand={{ $brand->slug }}">{{ $brand->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Author
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/">Semua Author</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            @foreach ($list[2] as $author)
                                <li><a class="dropdown-item"
                                        href="/search?author={{ $author->slug }}">{{ $author->username }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>

                <span class="navbar-text">
                    <a href="/login">
                        <button type="button" class="btn btn-success fw-bold">
                            Masuk
                        </button>
                    </a>
                    <a href="/signup">
                        <button type="button" class="btn btn-outline-success">
                            Daftar
                        </button>
                    </a>
                </span>
            </div>
        </div>
    </nav>
</header>
