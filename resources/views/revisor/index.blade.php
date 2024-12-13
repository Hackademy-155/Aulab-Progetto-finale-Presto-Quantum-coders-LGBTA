<x-layout>
    <div class="container-fluid">
        <div class="row vh-50 justify-content-center align-items-center">
            <div class="col-10">
                <h2 class="display-1 text-center">{{ __('ui.Area Revisione') }}</h2>
            </div>
        </div>
    </div>

    @if ($product_to_check)

    @if ($product_to_check->images->count())
    <div class="row justify-content-center pt-5 g-0">
        <div class="col-8">
            <div class="row justify-content-center g-0">
                {{-- @foreach ($product_to_check->images as $key=> $image)
                <div class="col-6 col-md-4 text-center">
                    <img class="img-fluid rounded shadow" src="{{Storage::url($image->path)}}" alt="Immagine {{$key +1}} dell'articolo {{$product_to_check->title}}">
                </div>
                @endforeach --}}
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($product_to_check->images as $key=> $image)
                        <div class="carousel-item active">
                            <img src="{{Storage::url($image->path)}}" class="d-block w-100 img-fluid" alt="Immagine {{$key +1}} dell'articolo {{$product_to_check->title}}">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                @else
                <div class="row justify-content-center pt-5 g-0">
                    <div class="col-8">
                        <div class="row justify-content-center g-0">
                            @for ($i = 0; $i < 1; $i++)
                            <div class="col-6 col-md-4 text-center">
                                <img class="img-fluid rounded shadow" src="https://picsum.photos/600" alt="foto">
                            </div>
                            @endfor
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4 ps-md-4 d-flex flex-column justify-content-between">
                        <div>
                            <h2>{{ $product_to_check->title }}</h2>
                            <h3>{{ __('ui.Autore') }}: {{ $product_to_check->user->name }}</h3>
                            <h4>{{ $product_to_check->price }} €</h4>
                            <h5 class="fst-italic text-muted">{{ __('ui.' . $product_to_check->category->name) }}</h5>
                            <p class="h6">{{ $product_to_check->description }}</p>
                        </div>
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                        <div class="d-flex pb-4 justify-content-around">

                            <form action="{{ route('reject.product', ['product' => $product_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-outline-danger px-3">{{ __('ui.Rifiuta') }}</button>
                            </form>

                            <form action="{{ route('accept.product', ['product' => $product_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-outline-success px-3">{{ __('ui.Accetta') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
                @else
                <div class="row justify-content-center align-items-center text-center g-0">
                    <div class="col-12">
                        <div>
                            <img src="/media/png-emptyBox.png" alt="" class="img-fluid"
                            style="max-width: 350px; height: auto;">
                        </div>
                        <h4 class="fst-italic display-4">{{ __('ui.Nessun prodotto da revisionare') }}</h4>
                        <a class="mt-5 btn btn-outline-custom" href="{{ route('home') }}">{{ __('ui.Torna alla home!') }}</a>
                    </div>
                </div>

                @endif
            </x-layout>
