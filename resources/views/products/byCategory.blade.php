<x-layout>
    <main class="vh-100 pt-5 mt-5">
        <div class="container py-5">
            <div class="row justify-content-center mb-4">
                <h2 class="text-center">{{ $category->name }}</h2>
            </div>
            <div class="row justify-content-center">
                @foreach ($products as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <a href="{{ route('product.show', compact('product')) }}" class="text-decoration-none">
                            <div class="card-body p-4">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p>Categoria: {{ $category->name }}</p>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">Prezzo: {{ $product->price }}€</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</x-layout>
