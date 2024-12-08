<x-layout>
    <div class="container vh-100">
        <div class="pt-5">
            <h1 class="display-1 text-center fw-bold my-5 title-insert-product py-5 my-5 ">I nostri prodotti</h1>
        </div>
        <div class="row justify-content-between align-items-center g-5">
            @foreach ($products as $product)
            <div class="col-12 col-md-4">
                <x-card
                :product='$product'
                />
            </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center mb-3">
        <div>
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </div>   
</x-layout>