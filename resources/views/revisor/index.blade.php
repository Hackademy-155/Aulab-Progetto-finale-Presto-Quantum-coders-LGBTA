<x-layout>

    <div class="container">
        <div class="row p-5">
            <div class="col-3">
                <h3>Area Revisione</h3>
            </div>
        </div>
    </div>

    @if ($product_to_check)
        
        <div class="row justify-content-center pt-5">
            <div class="col-8">
                <div class="row justify-content-center">

                    @for ($i = 0; $i < 6; $i++)
                        
                    <div class="col-6 col-md-4 text-center">
                        <img class="img-fluid rounded shadow" src="https://picsum.photos/600" alt="foto">
                    </div>

                    @endfor

                </div>
            </div>

            <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">

                <div>
                    <h2>{{$product_to_check->title}}</h2>
                    <h3>Autore: {{$product_to_check->user->name}}</h3>
                    <h4>{{$product_to_check->price}} €</h4>
                    <h5 class="fst-italic text-muted">{{$product_to_check->category->name}}</h5>
                    <p class="h6">{{$product_to_check->description}}</p>
                </div>

                <div class="d-flex pb-4 justify-content-around">
                    <form action="" method="POST">
                        @csrf
                        <button class="btn btn-outline-success px-3">Accetta</button>
                    </form>

                    <form action="" method="POST">
                        @csrf
                        <button class="btn btn-outline-danger px-3">Rifiuta</button>
                    </form>
                </div>
            </div>
        </div>

    @else
        
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <h2 class="fst-italic display-4">Nessun prodotto da revisionare</h2>
                <a class="mt-5 btn btn-outline-success" href="{{route('home')}}">Torna alla home!</a>
            </div>
        </div>
        
    @endif

</x-layout>