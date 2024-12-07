<x-layout>

  <div class="container ">
    <div class="row">
      <div class="col-12 mt-5 ">
        <h2 class="text-center mt-5"> {{$product->title}} - Dettagli </h2>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row justify-content-between align-items-center my-5 bg-body-secondary p-5 rounded-3 shadow">
      <div class="col-4 p-0">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
            </div>
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
      </div>

      <div class="col-5 text-center ">
        <p>Descrizione: {{$product->description}}</p>
        <div class="d-flex justify-content-around">
          <p class="small">Prezzo del prodotto: {{$product->price}}$</p>
          <a href="{{route('filterByCategory', $product->category)}}" class="text-black-50">
            <p class="small">{{ $product->category->name ?? 'Sconosciuta' }}</p>
          </a>
          
        </div>
      </div>
    </div>
  </div>


</x-layout>