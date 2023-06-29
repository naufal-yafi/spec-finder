<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fefefe" />
    <meta name="description"
        content="Temukan hardware komputer yang sesuai dengan kebutuhan Anda di situs kami! Dari prosesor hingga kartu grafis, kami menawarkan pilihan produk berkualitas dari merek terkemuka. Cari dan bandingkan harga, spesifikasi, dan ulasan pengguna untuk menemukan komponen terbaik untuk sistem Anda.">
    <meta name="keywords" content="spec finder, spek komputer gaming, spek komputer editing, rekomendasi laptop kuliah">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ url('logo192.png') }}">
    <link rel="manifest" href="{{ url('manifest.json') }}">

    <title>@yield('title')</title>

    <link rel="preload" href="https://fonts.googleapis.com/css?family=Nunito" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    </noscript>

    @include('config.conf_css')
</head>

<body>
    @include('components.riseUp')

    <header>
        <nav class="navbar bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ url('logo-type.svg') }}" height="20px" alt="">
                </a>
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
        </nav>
    </header>

    <main class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                @yield('img')
            </div>
            <div class="col-md-6 text-center text-md-start mt-3 mt-md-0">
                <small class="err-code fs-6 text-secondary">@yield('err')</small>

                <hgroup>
                    <h1 class="fw-bold mt-1">@yield('title_desc')</h1>
                    <p class="fs-5 text-secondary mt-1 mb-4">@yield('desc')</p>
                </hgroup>

                <div class="row">
                    <div class="col-lg-auto mb-2 mb-lg-0">
                        <a href="/" class="d-block">
                            <button class="btn btn-success px-5" style="width: 100%">Kembali</button>
                        </a>
                    </div>
                    <div class="col-lg-auto">
                        <a href="https://mail.google.com/mail/u/2/?ogbl#inbox?compose=CllgCJvpbfTzPshxlKhwCmwsxNXjrZJlDLhdGGKKcbFgPBBCmlnCqhGKRjSllKvCtQmSrXKrZWL"
                            target="_blank" class="d-block">
                            <button class="btn btn-outline-success px-4" style="width: 100%">Laporkan Bug</button>
                        </a>
                    </div>
                </div>

                <p class="mt-4">Kamu sedang mengalami kesulitan dengan penggunaan sistem kami? <a
                        href="https://mail.google.com/mail/u/2/?ogbl#inbox?compose=CllgCJvpbfTzPshxlKhwCmwsxNXjrZJlDLhdGGKKcbFgPBBCmlnCqhGKRjSllKvCtQmSrXKrZWL"
                        target="_blank" class="text-decoration-none text-success fw-bold">
                        Hubungi Kami Sekarang</a></p>
            </div>
        </div>
    </main>

    @include('components.footer')
    @include('config.conf_js')
</body>

</html>
