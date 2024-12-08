<a href="{{ route('product.show', compact('product')) }}">
    <div class="card">
        <div class="card-content">
            <h3 class="card-title">{{ $product->title }} {{ $product->price }}€</h3>
            <a href="{{ route('filterByCategory', $product->category) }}" class="text-black">
                <h4>Categoria: {{ $product->category->name ?? 'Sconosciuta' }}</h4>
            </a>
            <p class="card-para text-truncate">{{ $product->description }}</p>
        </div>
    </div>
</a>
