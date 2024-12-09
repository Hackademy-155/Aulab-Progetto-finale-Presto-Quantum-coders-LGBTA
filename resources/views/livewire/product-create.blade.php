{{-- <div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form wire:submit="create" class="shadow p-5 rounded-4 bg-form">

        <h1 class="fw-bold text-center mb-5">Aggiungi il tuo prodotto</h1>

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" wire:model.live.blur="title">
        </div>

        <div class="mb-3">
            <label for="category">Categoria</label>
            <select id="category" wire:model="category" class="form-select mb-3">
                <option value="" disabled selected>Seleziona la categoria</option>

                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" wire:model.live.blur="price">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" wire:model.live.blur="description"></textarea>
        </div>

        @if ($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        @endif

        <button type="submit" class="btn btn-dark">Aggiungi</button>
    </form>
</div> --}}



<div class="container-fluid">
    <div class="row mb-5 justify-content-center align-items-center ">
        <div class=" col-10 col-md-12 d-flex justify-content-center p-0 p-md-5 my-0 my-md-5">
            <form wire:submit="create" class="form shadow ">

                @csrf

                <h2 class="fw-bold text-center mb-5 title-insert-product">Aggiungi il tuo prodotto</h2>

                <span class="input-span mb-3">
                    <label for="title" class="label">Titolo</label>
                    <input type="text" id="title" wire:model.live.blur="title">
                </span>

                <span class="input-span mb-3">
                    <label for="category" class="label">Categoria</label>
                    <select id="category" wire:model="category" class="form-select mb-3 custom-select">
                        <option value="" disabled selected>Seleziona la categoria</option>

                        @foreach ($categories as $category)
                            <option class="custom-option" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </span>

                <span class="input-span mb-3">
                    <label for="price" class="label">Prezzo</label>
                    <input type="number" id="price" wire:model.live.blur="price">
                </span>

                <span class="input-span mb-3">
                    <label for="description" class="label">Descrizione</label>
                    <textarea type="text" name="description" id="description" wire:model.live.blur="description"></textarea>
                </span>

                @if ($errors->any())

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif


                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <button type="submit" class="submit">Aggiungi</button>

            </form>

        </div>
    </div>
</div>
