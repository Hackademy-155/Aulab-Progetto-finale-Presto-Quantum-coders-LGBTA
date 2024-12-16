<x-layout>
    <div class="container min-vh-100 mb-5 ">
        <div class="pt-5">
            <h1 class="display-1 text-center my-5 title-insert-product py-5 my-5 title-custom"> {{__('ui.I nostri prodotti')}} </h1>
        </div>
        <div class=" row justify-content-md-between justify-content-center align-items-center g-5">
            @foreach ($products as $product)
            <div class="col-10 d-flex justify-content-center col-md-4">
                <x-card
                :product='$product'
                />
            </div>
            @endforeach
        </div>
    </div>

        <div class="d-flex justify-content-center flex-column align-items-center">
            <p class="text-dark fw-bold"> {{__('ui.Scorri le Pagine dei prodotti')}} </p>
            <div>
                {{ $products->links() }}
            </div>
        </div>

</x-layout>