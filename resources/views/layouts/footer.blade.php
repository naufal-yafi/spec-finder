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
                            class="text-decoration-none text-success">Pengembang</a>
                    </li>
                    <li><a href="https://github.com/naufal-yafi/spec-finder/activity" target="_blank"
                            class="text-decoration-none text-success">Aktifitas</a></li>
                    <li><a href="https://github.com/naufal-yafi/spec-finder/releases" target="_blank"
                            class="text-decoration-none text-success">Versi Rilis</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5>Halaman</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="" target="_blank" class="text-decoration-none text-success">Beranda</a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="text-decoration-none text-success">Kategori</a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="text-decoration-none text-success">Merek</a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="text-decoration-none text-success">Author</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5>Dukungan</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="" target="_blank" class="text-decoration-none text-success">Bantuan</a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="text-decoration-none text-success">Wiki</a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="text-decoration-none text-success">Saran</a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="text-decoration-none text-success">Laporkan Bug</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5>Komunitas</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://discord.gg/2e9ubc3y" target="_blank"
                            class="text-decoration-none text-success">Discord</a>
                    </li>
                    <li>
                        <a href="https://github.com/naufal-yafi/spec-finder/discussions" target="_blank"
                            class="text-decoration-none text-success">Forum
                            Diskusi</a>
                    </li>
                    <li>
                        <a href="https://mail.google.com/mail/u/2/?ogbl#inbox?compose=CllgCJvpbfTzPshxlKhwCmwsxNXjrZJlDLhdGGKKcbFgPBBCmlnCqhGKRjSllKvCtQmSrXKrZWL"
                            target="_blank" class="text-decoration-none text-success">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>

        <hr />

        <div class="text-center text-dark">
            &copy; 2023 Spec Finder. All rights reserved.
        </div>
    </div>
</footer>
