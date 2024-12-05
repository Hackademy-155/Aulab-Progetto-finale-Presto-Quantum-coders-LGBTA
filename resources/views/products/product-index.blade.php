<x-layout>
    <div class="container-fluid">
        <div class="row vh-100 justify-content-center align-items-center bg-custom">
            <div class="col-6">
                <h1>I nostri prodotti</h1>
                @foreach ($products as $product)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->title }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="card-text">Prezzo: {{ $product->price }}€</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
