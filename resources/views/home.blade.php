<x-layout>
    <header>



        <div class="container-fluid">

            @if (session()->has('errorMessage'))
            <div class="alert alert-danger text-center shadow rounded w-50">
                {{ session('errorMessage') }}
            </div>
            @endif



            <div class="row mt-5 justify-content-center align-items-center min-vh-100">
                @if (session()->has('message'))
                <div class="alert alert-success text-center shadow rounded-3 w-100 mt-5 ">
                    {{ session('message') }}
                </div>
                @endif
                <div class="col-12 col-md-6  ">

                    <img class=" img-header img-fluid " src="/media/header.png" alt="img-header">

                </div>
                <div class="col-12 col-md-6 mt-md-5  text-center">

                    <h1 class="mt-5 fs-title text-center fw-bolder title-home ms-md-2">Presto shop</h1>

                    <button class="neu-button mt-4">
                        <a class="d-none" href="{{ route('product.create') }}"></a>
                        <a href="{{ route('product.create') }}">Inserisci il tuo prodotto</a>
                    </button>
                    <a class="btnphone" href="{{ route('product.create') }}"><i class="bi bi-plus-square"></i></a>
                </div>

            </div>
        </div>
    </header>
    <main>
        <section class="container">
            <div class="row p-md-5 justify-content-evenly align-items-center">
                <h4 class="fw-bold display-5 text-center my-5 title-home px-4 px-md-0">Ultimi prodotti aggiunti</h4>
                @foreach ($products as $product)
                <div class="col-10 col-md-4 g-5 d-flex justify-content-center align-items-center">
                    <x-card :product='$product' />
                </div>
                @endforeach

            </div>
        </section>

        <section class="container">
            <div class="row justify-content-center my-150 gap-5 align-items-center">
                <div class="col-5">
                    <img class="img-fluid rounded-5" src="/media/lavoraConNoi.jpg" alt="Immagine lavora con noi">
                </div>
                <div class="col-5">
                    <h4 class="display-5">Lavora con noi</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eos laudantium expedita inventore, incidunt blanditiis vitae nostrum velit ipsam dolor.</p>
                    <button class="neu-button"><a class=" text-white" href="{{route('lavoraConNoi')}}">Leggi di più</a></button>
                </div>
            </div>
        </section>

    </main>
</x-layout>
