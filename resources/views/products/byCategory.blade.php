<x-layout>
    <main class="vh-100 pt-5 mt-5">
        <div class="container py-5">
            <div class="row justify-content-center mb-4">
                <h2 class="text-center fs-title title-home ">{{ $category->name }}</h2>
            </div>
            <div class="row justify-content-center">
                @foreach ($products as $product)
                <div class="col-10 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <x-card
                    :product='$product'
                    />
                </div>
                @endforeach
            </div>
        </div>
    </main>
</x-layout>
