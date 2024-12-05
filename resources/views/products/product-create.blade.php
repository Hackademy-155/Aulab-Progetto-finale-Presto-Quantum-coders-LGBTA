<x-layout>
    <div class="container-fluid">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-6">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <livewire:product-create />
            </div>
        </div>
    </div>
</x-layout>