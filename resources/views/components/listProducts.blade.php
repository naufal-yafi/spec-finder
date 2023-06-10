<main class="mt-3 container d-flex justify-content-center align-items-center flex-wrap gap-2">
    @foreach ($products as $product)
        @include('components.cardProduct')
    @endforeach
</main>
