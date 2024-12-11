<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-5">Risultati della tua ricerca <span class="fst-italic">{{$query}}</span></h2>
            </div>
        </div>

        <div class="row justify-content-center align-items-center p-5">

            @forelse ($products as $product)

                <div class="col-12 col-md-3">
                    <x-card :product=$product/>
                </div>

            @empty
                
                <div class="col-12">
                    <h4 class="text-center">Nessun articolo trovato</h4>
                </div>

            @endforelse

        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div>
            {{$products->links()}}
        </div>
    </div>


</x-layout>