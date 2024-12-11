<x-layout>
    <div class="container-fluid">
        <div class="row vh-50 justify-content-center align-items-center">
            <div class="col-10">
                <h2 class="display-1 text-center">Area Revisione</h2>
            </div>
        </div>
    </div>

    @if ($product_to_check)

        <div class="row justify-content-center pt-5 g-0">
            <div class="col-8">
                <div class="row justify-content-center g-0">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-6 col-md-4 text-center">
                            <img class="img-fluid rounded shadow" src="https://picsum.photos/600" alt="foto">
                        </div>
                    @endfor
                </div>
            </div>

            <div class="col-md-4 ps-md-4 d-flex flex-column justify-content-between">
                <div>
                    <h2>{{$product_to_check->title}}</h2>
                    <h3>Autore: {{$product_to_check->user->name}}</h3>
                    <h4>{{$product_to_check->price}} €</h4>
                    <h5 class="fst-italic text-muted">{{$product_to_check->category->name}}</h5>
                    <p class="h6">{{$product_to_check->description}}</p>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="d-flex pb-4 justify-content-around">
                    <form action="{{route('accept.product', ['product' => $product_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-outline-success px-3">Accetta</button>
                    </form>

                    <form action="{{route('reject.product', ['product' => $product_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-outline-danger px-3">Rifiuta</button>
                    </form>
                </div>
            </div>
        </div>

    @else

        <div class="row justify-content-center align-items-center text-center g-0">
            <div class="col-12">
                <div>
                    <img src="/media/png-emptyBox.png" alt="" class="img-fluid" style="max-width: 350px; height: auto;">
                </div>
                <h4 class="fst-italic display-4">Nessun prodotto da revisionare</h4>
                <a class="mt-5 btn btn-outline-custom" href="{{route('home')}}">Torna alla home!</a>
            </div>
        </div>

    @endif
</x-layout>
