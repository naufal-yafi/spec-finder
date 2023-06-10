@extends('layouts.main')

@section('app')
    <main class="container">
        <div class="card mt-5 p-4">
            <p class="fs-6 text-secondary">Tentang Kami</p>

            <ol type="a">
                <li class="fs-6 fw-bold">
                    <hgroup>
                        <h1 class="fs-5 fw-bold">Apa itu SpecFinder?</h1>
                        <p class="fw-normal">
                            Spec Finder merupakan situs yang digunakan untuk menampilkan informasi dan detail
                            spesifikasi perangkat keras komputer seperti prosesor, kartu grafis, memori dan juga periferal
                            komputer. Aplikasi ini memungkinkan pengguna untuk mencari dan membandingkan produk dari
                            berbagai merek dan jenis, memperoleh detail spesifikasi, fitur, dan gambar produk, serta
                            mengetahui harga yang sesuai.
                        </p>
                    </hgroup>
                </li>
                <li class="fs-6 fw-bold">
                    <hgroup>
                        <h1 class="fs-5 fw-bold">Kenapa harus menggunakan SpecFinder?</h1>
                        <p class="fw-normal">
                        <ol class="fw-normal">
                            <li>Membandingkan satu hardware dengan hardware lainnya jauh lebih mudah</li>
                            <li>Mendapatkan informasi yang valid karena ketersediaan data dikelola oleh admin dan data
                                tersebut diperoleh dari official situs dari brand hardware tersebut</li>
                        </ol>
                        </p>
                    </hgroup>
                </li>
            </ol>
        </div>
    </main>
@endsection
