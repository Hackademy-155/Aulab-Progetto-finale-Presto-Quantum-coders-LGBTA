<a href="{{ route('product.show', compact('product')) }}">
    <div class="card p-3 scale-up-center ">
        <div class="card-content flex-column">
            <h4 class="text-nowrap titleCard pulsate-fwd">{{ $product->title }}</h4>
            <a href="{{ route('filterByCategory', $product->category) }}" class="text-black">
                <h5 class="text-truncate card-content">{{ $product->category->name ?? 'Sconosciuta' }}</h5>
            </a>
            {{-- <p class="card-para text-truncate">{{ $product->description }}</p> --}}
            <p class="display-5 fw-bold">{{ $product->price }}€</p>
        </div>
    </div>
</a>
