<x-layout>
    <div class="container-fluid">
        <div class="row">

            {{-- @dd($products) --}}
            @foreach ($products as $product)
            <div class="col-10 col-md-4">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p>Categoria: {{$category->name}}<p>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="card-text">Prezzo: {{ $product->price }}€</p>
                                    <a href="{{route('product.show', compact('product'))}}" class="neu-button">Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </x-layout>