<footer class="bg-light pt-5 pb-3 mt-4" id="bottom">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center justify-content-md-between mb-4 gap-3">
            <a href="/">
                <img src="{{ url('logo-type.svg') }}" height="35px" alt="">
            </a>

            <div class="text-center text-md-start">
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
            </div>
        </div>

        <div class="d-flex justify-content-md-end justify-content-center mb-5 flex-wrap" style="width: 100%;">
            <div class="d-flex align-items-center gap-4 gap-md-2 me-2 mb-3 mb-md-0">
                <a href="https://mail.google.com/mail/u/0/?hl=en#inbox?compose=CllgCJfmrDSLvbDzwSlZXHqnbbfqbXKVfkWMBnxHWvRjvVcmrxzNcqCgVcfSscKfXRJbnqtbdPg"
                    target="_blank">
                    <img src="{{ url('assets/icons/gmail.svg') }}" width="24px" height="24px" alt="icon gmail"
                        class="icon-hover">
                </a>

                <a href="https://github.com/naufal-yafi/spec-finder" target="_blank">
                    <img src="{{ url('assets/icons/github.svg') }}" width="24px" height="24px" alt="icon github"
                        class="icon-hover">
                </a>

                <a href="https://discord.gg/cEhhTMcsgE" target="_blank">
                    <img src="{{ url('assets/icons/discord.svg') }}" width="24px" height="24px" alt="icon discord"
                        class="icon-hover">
                </a>
            </div>
            <form action="/search" id="input-container" class="d-flex" role="search" style="width: 300px">
                <input name="search" class="form-control outline-none border-0" type="text"
                    placeholder="Cari hardware yang kamu butuhkan disini..." aria-label="Search"
                    value="{{ request('search') }}">

                <a href="#">
                    <button class="btn btn-link" type="submit">
                        <img src="{{ url('assets/icons/search.svg') }}" width="18px" height="18px" alt="icon search">
                    </button>
                </a>
            </form>
        </div>

        <div class="row justify-content-between">
            <div class="col-md-2 text-center text-md-start">
                <h5>Informasi</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://github.com/naufal-yafi/spec-finder/wiki" target="_blank"
                            class="text-decoration-none text-success">Tentang Kami</a>
                    </li>
                    <li><a href="https://github.com/naufal-yafi/spec-finder/activity" target="_blank"
                            class="text-decoration-none text-success">Aktifitas</a></li>
                    <li><a href="https://github.com/naufal-yafi/spec-finder/releases" target="_blank"
                            class="text-decoration-none text-success">Versi Rilis</a></li>
                </ul>
            </div>
            <div class="col-md-2 text-center text-md-start">
                <h5>Halaman</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="/" class="text-decoration-none text-success">Beranda</a>
                    </li>
                    <li>
                        <a href="/" class="text-decoration-none text-success">Kategori</a>
                    </li>
                    <li>
                        <a href="/" class="text-decoration-none text-success">Merek</a>
                    </li>
                    <li>
                        <a href="/" class="text-decoration-none text-success">Author</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 text-center text-md-start">
                <h5>Dukungan</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://github.com/naufal-yafi/spec-finder/wiki" target="_blank"
                            class="text-decoration-none text-success">Wiki</a>
                    </li>
                    <li>
                        <a href="https://mail.google.com/mail/u/2/?ogbl#inbox?compose=CllgCJvpbfTzPshxlKhwCmwsxNXjrZJlDLhdGGKKcbFgPBBCmlnCqhGKRjSllKvCtQmSrXKrZWL"
                            target="_blank" class="text-decoration-none text-success">Bantuan</a>
                    </li>
                    <li>
                        <a href="https://mail.google.com/mail/u/2/?ogbl#inbox?compose=CllgCJvpbfTzPshxlKhwCmwsxNXjrZJlDLhdGGKKcbFgPBBCmlnCqhGKRjSllKvCtQmSrXKrZWL"
                            target="_blank" class="text-decoration-none text-success">Saran</a>
                    </li>
                    <li>
                        <a href="https://mail.google.com/mail/u/2/?ogbl#inbox?compose=CllgCJvpbfTzPshxlKhwCmwsxNXjrZJlDLhdGGKKcbFgPBBCmlnCqhGKRjSllKvCtQmSrXKrZWL"
                            target="_blank" class="text-decoration-none text-success">Laporkan Bug</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 text-center text-md-start">
                <h5>Komunitas</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://discord.gg/cEhhTMcsgE" target="_blank"
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
