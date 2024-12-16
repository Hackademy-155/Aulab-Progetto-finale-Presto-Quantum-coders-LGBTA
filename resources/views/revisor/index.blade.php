<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center py-5 mt-5">
            <div class="col-12 text-center">
                <h2 class="display-4 fw-bold">{{ __('ui.Area Revisione') }}</h2>
            </div>
        </div>
    </div>

    @if ($product_to_check)
    <div class="row justify-content-center py-5 g-4">
        <div class="col-12 col-lg-4">
            @if ($product_to_check->images->count())
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach ($product_to_check->images as $key => $image)
                    <button type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                    aria-label="Slide {{ $key + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach ($product_to_check->images as $key => $image)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ $image->getUrl(800, 600) }}" class="d-block rounded-3 mx-auto"
                        alt="Immagine {{ $key + 1 }} dell'articolo {{ $product_to_check->title }}">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    @else
    <div class="text-center">
        <img class="img-fluid rounded shadow" src="https://picsum.photos/200" alt="placeholder image">
    </div>
    @endif
</div>

<div class="col-12 col-lg-4 d-flex flex-column justify-content-between mt-4 mt-lg-0">
    <div>
        <h2 class="h4 fw-bold">{{ $product_to_check->title }}</h2>
        <h5>{{ __('ui.Autore') }}: <span class="fw-bold">{{ $product_to_check->user->name }}</span></h5>
        <h4 class="text-primary fw-bold">{{ number_format($product_to_check->price, 2) }} €</h4>
        <h6 class="text-muted fst-italic">{{ __('ui.' . $product_to_check->category->name) }}</h6>
        <p class="mt-3">{{ $product_to_check->description }}</p>
    </div>

    @if (session()->has('message'))
    <div class="alert alert-success mt-3">
        {{ session('message') }}
    </div>
    @endif

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
</div>
@else
<div class="row justify-content-center text-center py-5">
    <div class="col-12">
        <img src="/media/png-emptyBox.png" alt="empty box" class="img-fluid" style="max-width: 300px;">
        <h4 class="fst-italic display-6 my-4">{{ __('ui.Nessun prodotto da revisionare') }}</h4>
        <a class="btn-outline-custom" href="{{ route('home') }}">{{ __('ui.Torna alla home!') }}</a>
    </div>
</div>
@endif

<div class="container mt-5">
    <div class="row my-3">
        <h4 class="text-center text-decoration-underline fs-3 fw-bold">Ultimi articoli revisionati</h4>
    </div>
    @foreach ($products as $product)
    @if($product != $product_to_check)
    <div class="row justify-content-center my-3 align-items-center">
        <div class="col-10 col-md-5 d-flex align-items-center">
            <p class="m-0">
                @if($product->is_accepted == "")
                <div class="bg-secondary tondo me-3"></div>
                @elseif($product->is_accepted == false)
                <div class="bg-danger tondo me-3"></div>
                @elseif($product->is_accepted == true)
                <div class="bg-success tondo me-3"></div>
                @endif

            </p>
            <p class="d-flex align-items-center m-0">{{$product->title}}</p>

            <form class="ms-auto" action="{{route('cancel.product', $product)}}" method="POST">
                @csrf
                @method('PATCH')
                <button class="annulla-btn ms-auto" type="submit">Annulla</button>
            </form>
            @endif
        </div>
    </div>
    @endforeach
    <div class="row justify-content-center mt-5">
        <div class="col-5 d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
</div>
</x-layout>
