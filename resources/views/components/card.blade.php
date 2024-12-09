<a href="{{ route('product.show', compact('product')) }}">
    <div class="card p-3">
        <div class="card-content">
            <h2 class="card-title fw-bold">{{ $product->title }}</h2>
            <a href="{{ route('filterByCategory', $product->category) }}" class="text-black">
                <h5>Categoria: {{ $product->category->name ?? 'Sconosciuta' }}</h5>
            </a>
            <p class="card-para text-truncate">{{ $product->description }}</p>
            <p>Prezzo: {{ $product->price }}€</p>
        </div>
    </div>
</a>
