<x-layout>

    <header>
        <div class="container-fluid">
            <div class="row mt-5 justify-content-end align-items-center min-vh-100">
                <div class="col-md-4 col-6 mt-md-5 me-md-5 text-center">
                    <h1 class="mt-5 display-1 text-center fw-bolder title-home">Presto shop</h1>

                    <button class="neu-button mt-4">
                        <a class="d-none" href="{{route('product.create')}}"></a>
                        <a href="{{route('product.create')}}">Inserisci il tuo prodotto</a>
                    </button>
                    <a class="btnphone" href="{{route('product.create')}}"><i class="bi bi-plus-square"></i></a>
                </div>
            </div>
        </div>
    </header>

    <main>

        <section class="container-fluid">
            <div class="row p-md-5 justify-content-md-start justify-content-center">
                <h2 class="display-1 fw-bold text-center my-5 title-home px-4 px-md-0">Ultimi prodotti aggiunti</h2>
                @foreach ($products as $product)
                <div class="col-10 col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->title }}</h5>
                                    <p>Categoria: {{$categories[$product->category_id]->name ?? 'Sconosciuta'}}<p>
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
            </section>


            <section>

            </section>

        </main>

    </x-layout>