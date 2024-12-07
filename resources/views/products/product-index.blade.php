<x-layout>
    <div class="container-fluid">
        <div class="row min-vh-100 justify-content-center align-items-center bg-custom p-5 my-5">
            <h1 class="display-1 text-center fw-bold my-5">I nostri prodotti</h1>
            
            @foreach ($products as $product)
            <div class="col-4">
                {{-- card --}}
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <a href="{{route('filterByCategory', $product->category)}}" class="text-black">
                                    <p>Categoria: {{ $product->category->name ?? 'Sconosciuta' }}</p>
                                </a>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">Prezzo: {{ $product->price }}€</p>
                                <a href="{{ route('product.show', compact('product')) }}" class="btn btn-primary">Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
    
    <div class="d-flex justify-content-center mb-3">
        <div>
            {{$products->links()}}
        </div>
    </div>   
</x-layout>
