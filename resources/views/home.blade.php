<x-layout>
    <header>
        

        
        <div class="container-fluid">

            @if (session()->has('errorMessage'))
            <div class="alert alert-danger text-center shadow rounded w-50">
                {{ session('errorMessage') }}
            </div>
        @endif

            @if (session()->has('message'))
            <div class="alert alert-success text-center shadow rounded w-50">
                {{ session('message') }}
            </div>
        @endif

            <div class="row mt-5 justify-content-center align-items-center min-vh-100">
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
        <section class="container-fluid">
            <div class="row p-md-5 justify-content-evenly align-items-center">
                <h4 class="fw-bold display-5 text-center my-5 title-home px-4 px-md-0">Ultimi prodotti aggiunti</h4>
                @foreach ($products as $product)
                    <div class="col-10 col-md-4 g-5 d-flex justify-content-center align-items-center">
                        <x-card :product='$product' />
                    </div>
                @endforeach
            </div>
        </section>

    </main>
</x-layout>
