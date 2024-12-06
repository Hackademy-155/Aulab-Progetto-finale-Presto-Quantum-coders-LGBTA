<x-layout>

    <header>
        <div class="container">
            <div class="row mt-5 justify-content-end align-items-center min-vh-100">
                <div class="col-md-4 col-5 mt-md-5 me-3 text-center">
                    <h1 class="mt-5 display-1 text-center fw-bolder title-home">Presto shop</h1>
                    <p class=" text-center"><small>Inizia a vendere con noi!</small></p>
                    <button class="neu-button">
                        <a class="d-none" href="{{route('product.create')}}"></a>
                        <a href="{{route('product.create')}}">Inserisci il tuo prodotto</a>
                    </button>
                    <a class="btnphone" href="{{route('product.create')}}"><i class="bi bi-plus-square"></i></a>
                </div>
            </div>
        </div>
    </header>

    <main>

        <section>

        </section>



        <section>

        </section>

    </main>

</x-layout>