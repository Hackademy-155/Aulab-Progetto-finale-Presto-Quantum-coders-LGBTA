<x-layout>
    <div class="container-fluid">
        <div class="row min-vh-100 justify-content-center align-items-center bg-custom px-5">
            <h1 class="display-1 text-center fw-bold">I nostri prodotti</h1>
            @foreach ($products as $product)
            <div class="col-2">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p>Categoria: {{$categories[$product->category_id]->name}}<p>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">Prezzo: {{ $product->price }}€</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
