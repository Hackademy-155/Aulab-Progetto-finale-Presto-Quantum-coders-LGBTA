<x-layout>
    <main class="min-vh-100 pt-5 mt-5">
        <div class="container py-5">
            <div class="row justify-content-center mb-4">
                <h2 class="text-center fs-title title-home ">{{ $category->name }}</h2>
            </div>
            <div class="row justify-content-center">
                @forelse ($products as $product)
                <div class="col-10 col-sm-6 col-md-4 mb-4 g-5">
                    <x-card
                    :product='$product'
                    />
                </div> 
                @empty
                <div class="col-12 vh-100 text-center ">
                    <h3>Nessun prodotto presente in questa categoria</h3>
                    <div>
                        <img src="/media/png-emptyBox.png" alt="" class="img-fluid">
                    </div>
                </div>
                @endforelse 
                
                
            </div>
        </div>
    </main>
</x-layout>
