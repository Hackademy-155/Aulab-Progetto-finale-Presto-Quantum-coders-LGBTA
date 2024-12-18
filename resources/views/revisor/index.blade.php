<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center py-5 mt-5">
            <div class="col-12 text-center">
                <h2 class="display-4 title-custom mt-3">{{ __('ui.Area Revisione') }}</h2>
            </div>
        </div>
    </div>

    <hr class="w-75 mx-auto py-0 my-4">

    @if ($product_to_check)
        <div class="container-fluid mb-4 p-0 p-md-5">
            <div class="row justify-content-around text-center p-0 p-md-5 g-4 shadow-none">
                <div class="col-12 col-lg-4 p-5 p-md-1">
                    @if ($product_to_check->images->count())
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                @foreach ($product_to_check->images as $key => $image)
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                        aria-label="Slide {{ $key + 1 }}">
                                    </button>
                                @endforeach
                            </div>
                            <div class="carousel-inner d-flex">
                                @foreach ($product_to_check->images as $key => $image)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <img src="{{ $image->getUrl(571, 450) }}" class="d-block"
                                            alt="Immagine {{ $key + 1 }} dell'articolo {{ $product_to_check->title }}">
                                    </div>
                                @endforeach

                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    @else
                        <div class="text-center">
                            <img class="img-fluid rounded shadow" src="https://picsum.photos/200"
                                alt="placeholder image">
                        </div>
                    @endif
                </div>

                <div class="col-12 col-lg-5 p-5 p-md-1">
                    <table>
                        <thead>
                            <tr>
                                <th>Immagine</th>
                                <th>Tags</th>
                                <th>Criteri</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product_to_check->images as $key => $image)   
                            <tr>
                                    <td>Immagine n.{{ $key + 1 }}</td>
                                    <td>
                                        @if ($image->labels)
                                            @foreach ($image->labels as $label)
                                                #{{ $label }},
                                            @endforeach
                                        @else
                                            <span class="fst-italic">No labels</span>
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><strong>Adult:</strong> <span class="{{ $image->adult }}"></span></li>
                                            <li><strong>Violence:</strong> <span class="{{ $image->violence }}"></span></li>
                                            <li><strong>Spoof:</strong> <span class="{{ $image->spoof }}"></span></li>
                                            <li><strong>Racy:</strong> <span class="{{ $image->racy }}"></span></li>
                                            <li><strong>Medical:</strong> <span class="{{ $image->medical }}"></span></li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                    <div class="table shadow">
                        <h2 class="text-uppercase fw-bold">{{ $product_to_check->title }}</h2>
                        <hr>
                        <h5>{{ __('ui.Autore') }}: <span class="fw-bold">{{ $product_to_check->user->name }}</span>
                        </h5>
                        <hr>
                        <h4 class="text-primary fw-bold">{{ number_format($product_to_check->price, 2) }} €</h4>
                        <hr>
                        <h6 class="text-muted fst-italic">{{ __('ui.' . $product_to_check->category->name) }}</h6>
                        <hr>
                        <h5>{{__('ui.Descrizione')}}</h4>
                        <p class="mt-3">{{ $product_to_check->description }}</p>
                        <div class="d-flex gap-3 pt-4">
                            <form action="{{ route('reject.product', ['product' => $product_to_check]) }}" method="POST"
                                class="flex-fill">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-outline-danger w-100 py-2">{{ __('ui.Rifiuta') }}</button>
                            </form>
    
                            <form action="{{ route('accept.product', ['product' => $product_to_check]) }}" method="POST"
                                class="flex-fill">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-outline-success w-100 py-2">{{ __('ui.Accetta') }}</button>
                            </form>
                        </div>
                    </div>

                    @if (session()->has('message'))
                        <div class="alert alert-success mt-3">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

            </div>
        </div>
    @else
        <div class="row justify-content-center text-center py-5">
            <div class="col-12">
                <img loading="lazy" src="/media/png-emptyBox.png" alt="empty box" class="img-fluid"
                    style="max-width: 300px;">
                <h4 class="fst-italic display-6 my-4">{{ __('ui.Nessun prodotto da revisionare') }}</h4>
                <a class="btn-outline-custom" href="{{ route('home') }}">{{ __('ui.Torna alla home!') }}</a>
            </div>
        </div>
    @endif

    <hr class="w-75 mx-auto py-0 my-4">

    <div class="container-fluid mt-5">
        <div class="row my-3">
            <h4 class="text-center text-decoration-underline fs-3 fw-bold"> {{ __('ui.Ultimi articoli revisionati') }}
            </h4>
        </div>

        @foreach ($products as $product)
            @if ($product != $product_to_check)
                <div class="row justify-content-center my-3 align-items-center w-100">
                    <div class="col-10 col-md-5 d-flex justify-content-center align-items-center">
                        @if ($product->is_accepted == '')
                            <div class="bg-secondary tondo me-3"></div>
                        @elseif ($product->is_accepted == false)
                            <div class="bg-danger tondo me-3"></div>
                        @else
                            <div class="bg-success tondo me-3"></div>
                        @endif
                        <p class="m-0 d-flex justify-content-center">{{ $product->title }}</p>

                        <form class="ms-auto" action="{{ route('cancel.product', $product) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="annulla-btn ms-auto" type="submit"> {{ __('ui.Annulla') }} </button>
                        </form>
                    </div>
                </div>
            @endif
        @endforeach

        <div class="row justify-content-center mt-5">
            <div class="col-5 d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-layout>
