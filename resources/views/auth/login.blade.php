@extends('layouts.main')

@section('app')
    <div class="container pt-4">
        <div class="card px-4 py-3">
            <hgroup class="mt-2">
                <h1 class="fs-4 fw-bold">Masuk Sebagai Pengguna</h1>
                <p class="text-secondary">Masukkan email dan password dengan benar!</p>
            </hgroup>

            <main>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-success fw-bold">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>

                <label for="inputPassword5" class="form-label text-success fw-bold">Password</label>
                <input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                    Kata sandi Anda harus sepanjang 8-20 karakter, mengandung huruf dan angka, dan tidak boleh mengandung
                    spasi, karakter khusus, atau emoji.
                </div>

                <a href="/maintenance">
                    <button class="btn btn-success mt-5 w-100">Masuk</button>
                </a>

                <p class="mt-4 text-center">Belum memiliki akun? <a href="/signup"
                        class="text-decoration-none text-success fw-bold">
                        Daftar Sekarang</a></p>
            </main>
        </div>
    </div>
@endsection
