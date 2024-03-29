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

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Nunito" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    </noscript>

    @include('config.conf_css')
</head>

<body>
    @include('components.riseUp')
    @include('components.navbar')

    @if ($search)
        @include('components.searchBar')
    @endif

    @yield('app')

    @if ($paginate)
        <div class="container mt-5 d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    @endif

    @include('components.footer')

    @include('config.conf_js')
</body>

</html>
