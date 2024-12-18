<div class="product-card">

    <div class="main-images">
        <img class="rounded-4"
            src="{{ $product->images->isNotEmpty() ? $product->images->first()->getUrl(571, 450) : 'https://picsum.photos/300' }}"
            alt="Immagine del prodotto {{ $product->name }} ">
    </div>
    <div class="shoe-details">
        <span class="shoe_name text-center">{{ $product->title }}</span>
        <hr>
    </div>
    <div class="color-price">
        <div class="color-option">
            <a class="color" href="{{ route('filterByCategory', $product->category) }}">
                <i class="bi bi-tags"></i> 
                {{ __('ui.' . $product->category->name) }}</a>
        </div>
        <div class="price">
            <span class="price_num">{{ $product->price }} €</span>
        </div>
    </div>
    <div class="button">
        <div class="button-layer"></div>
        <a class="w-100 h-100" href="{{ route('product.show', compact('product')) }}"
                class="text-white"><button>Info</button></a>
    </div>
</div>
