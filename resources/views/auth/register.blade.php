@extends('layouts.main')

@section('app')
    <div class="container pt-4">
        <div class="card px-4 py-3">
            <hgroup class="mt-2">
                <h1 class="fs-4 fw-bold">Daftar Sebagai Pengguna Baru</h1>
                <p class="text-secondary">Lengkapi formulir dibawah dengan tepat dan benar!</p>
            </hgroup>

            <main>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label text-success fw-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Isi nama lengkap">
                </div>

                <div class="mb-3">
                    <label for="" class="text-success fw-bold">Jenis Kelamin</label>
                    <div class="d-flex gap-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Pria
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Wanita
                            </label>
                        </div>
                    </div>
                </div>

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

                <div class="mt-3">
                    <label for="inputPassword6" class="form-label text-success fw-bold">Konfirmasi Password</label>
                    <input type="password" id="inputPassword6" class="form-control" aria-labelledby="passwordHelpBlock">
                </div>

                <div class="form-check form-switch mt-3">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Menyetujui peraturan dan kebijakan
                        pengguna.</label>
                </div>

                <a href="/maintenance">
                    <button class="btn btn-success mt-5 w-100">Daftar</button>
                </a>

                <p class="mt-4 text-center">Sudah memiliki akun? <a href="/login"
                        class="text-decoration-none text-success fw-bold">
                        Masuk Sekarang</a></p>
            </main>
        </div>
    </div>
@endsection
