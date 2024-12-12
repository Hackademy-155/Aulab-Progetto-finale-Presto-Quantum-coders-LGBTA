<x-layout>
    <div class="container my-5">



        <div class="row">
          <div class="col-12 mt-5">
            
            <h2 class="text-center display-4 fw-bold">
              <a class="display-5 text-decoration-none color-second me-5" href="{{ route('product.index') }}"><i class="bi bi-arrow-left-circle-fill"></i></a>
              {{ $product->title }} - {{__('ui.Dettagli')}}</h2>
          </div>
        </div>
        
        <div class="row justify-content-between align-items-center my-5 bg-body-secondary p-5 rounded-3 shadow">
          
          <div class="col-12 col-md-5">
            <div id="productCarousel" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://picsum.photos/600" class="d-block w-100 zoom-on-hover"
                                alt="Product Image">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/600" class="d-block w-100 zoom-on-hover"
                                alt="Product Image">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/600" class="d-block w-100 zoom-on-hover"
                                alt="Product Image">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

            <div class="col-12 col-md-6 text-center">
                <p class="description mt-5 mt-md-0"><strong>{{ __('ui.Descrizione')}}</strong> {{ $product->description }}</p>
                <div class="d-flex justify-content-around mt-4">
                    <p class="small fw-bold">{{ __('ui.Prezzo')}}: {{ $product->price }}$</p>
                    <a href="{{ route('filterByCategory', $product->category) }}" class="text-decoration-none">
                        <p class="small">{{ __('ui.' . $product->category->name)  ?? 'ui.' . 'Sconosciuta' }}</p>
                    </a>

                </div>
            </div>
        </div>
    </div>


</x-layout>
