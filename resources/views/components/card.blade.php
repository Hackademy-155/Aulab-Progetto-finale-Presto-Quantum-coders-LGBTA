{{-- <div class="card p-3 scale-up-center ">
    <div class="card-content flex-column">
        <h4 class="text-nowrap titleCard pulsate-fwd">{{ $product->title }}</h4>
        <a href="{{ route('filterByCategory', $product->category) }}" class="text-black">
            <h5 class="text-truncate card-content">{{ $product->category->name ?? 'Sconosciuta' }}</h5>
        </a>
        
        <p class="display-5 fw-bold">{{ $product->price }}€</p>
    </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-dark rounded-2 px-3" href="{{ route('product.show', compact('product')) }}">Clicca qui</a>
    </div>
</div> --}}

<div class="product-card">

    <div class="main-images">
    </div>
    <div class="shoe-details">
        <span class="shoe_name text-center">{{ $product->title }}</span>
        <hr>
    </div>
    <div class="color-price">
        <div class="color-option">
            <a class="color" href="{{ route('filterByCategory', $product->category) }}">{{$product->category->name}}</a>
            
        </div>
        <div class="price">
            <span class="price_num">{{ $product->price }} €</span>
        </div>
    </div>
    <div class="button">
        <div class="button-layer"></div>
        <button><a href="{{ route('product.show', compact('product')) }}" class="text-white">Info</a></button>
    </div>
</div>
