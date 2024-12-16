<x-layout>

    <div class="container-fluid">
        <div class="row vh-50 justify-content-center align-items-center">
            <div class="col-12">
                <h2 class="text-center mt-5 display-1 title-custom">{{__('ui.Risultati della tua ricerca')}}<span class="fst-italic">"{{$query}}"</span></h2>
            </div>
        </div>

        <div class="row align-items-center p-5">

            @forelse ($products as $product)

                <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
                    <x-card :product=$product/>
                </div>

            @empty

                <div class="col-12">
                    <h4 class="text-center">{{__('ui.Nessun articolo trovato')}}</h4>
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