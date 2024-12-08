<x-layout>
    <div class="container-fluid">
        <div class="row min-vh-100 justify-content-center align-items-center bg-custom p-5 my-5">
            <h1 class="display-1 text-center fw-bold my-5">I nostri prodotti</h1>
            
            @foreach ($products as $product)
            <div class="col-4">
                {{-- card --}}
                
                <x-card
                :product='$product'
                />
            </div>
            @endforeach
            
            
        </div>
    </div>
    
    <div class="d-flex justify-content-center mb-3">
        <div>
            {{$products->links()}}
        </div>
    </div>   
</x-layout>
