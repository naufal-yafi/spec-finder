@php
    $value = '';
    
    if (request('search')) {
        $value = request('search');
    } elseif (request('tag')) {
        $value = convert(request('tag'));
    } else {
        $value = '';
    }
    
    function convert($slug)
    {
        return ucwords(str_replace(['-', '.'], ' ', $slug));
    }
@endphp

<section id="search-bar" class="navbar mt-2 d-flex justify-content-center">
    <form action="/search" id="input-container" class="d-flex" role="search">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('brand'))
            <input type="hidden" name="brand" value="{{ request('brand') }}">
        @endif
        <input name="search" class="form-control outline-none border-0 w-100" type="text"
            placeholder="Cari hardware yang kamu butuhkan disini..." aria-label="Search" value="{{ $value }}">

        <a href="#">
            <button class="btn btn-link" type="submit">
                <img src="{{ url('assets/icons/search.svg') }}" width="18px" height="18px" alt="icon search">
            </button>
        </a>
    </form>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle bg-transparent border-0" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ url('assets/icons/adjustments.svg') }}" width="21px" height="21px" alt="icon filter">
        </button>

        <ul class="dropdown-menu mt-3" style="transform: translateX(-125px);">
            <li><a class="dropdown-item" href="?sort=ASC">Termurah</a></li>
            <li><a class="dropdown-item" href="?sort=DESC">Termahal</a></li>
        </ul>
    </div>
</section>
