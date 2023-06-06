@foreach ($products as $product)
    <a href="/product/{{ $product->slug }}">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5>
                <p class="card-text">{{ $product->price }}</p>
                <a href="#" class="btn btn-primary"></a>
            </div>
        </div>
    </a>
@endforeach
