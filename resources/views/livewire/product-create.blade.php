<div class="container-fluid">
    <div class="row mb-5 justify-content-center align-items-center ">
        <div class="col-10 col-md-12 d-flex justify-content-center p-0 p-md-5 my-0 my-md-5">
            <form wire:submit="create" class="form shadow">
                @csrf

                <h2 class="fw-bold text-center mb-5 title-insert-product display-4">{{__('ui.Aggiungi il tuo prodotto')}}</h2>

                <span class="input-span mb-3">
                    <label for="title" class="label">{{__('ui.Titolo')}}</label>
                    <input type="text" id="title" wire:model.live.blur="title">
                    @error('title')
                        <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                </span>

                <span class="input-span mb-3">
                    <label for="category" class="label">{{__('ui.Categoria')}}</label>
                    <select id="category" wire:model="category" class="form-select mb-3 custom-select">
                        <option value="" disabled selected>{{__('ui.Seleziona la categoria')}}</option>
                        @foreach ($categories as $category)
                        <option class="custom-option" value="{{ $category->id }}">{{ __('ui.' . $category->name)  }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                </span>

                <span class="input-span mb-3">
                    <label for="price" class="label">{{__('ui.Prezzo')}}</label>
                    <input type="number" id="price" wire:model.live.blur="price">
                    @error('price')
                        <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                </span>

                <span class="input-span mb-3">
                    <label for="description" class="label">{{__('ui.Descrizione')}}</label>
                    <textarea type="text" name="description" id="description" wire:model.live.blur="description"></textarea>
                    @error('description')
                        <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                </span>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <button id="Insert" type="submit" class="submit" wire:ignore>{{__('ui.Aggiungi')}}</button>

            </form>
            <audio id="audioInsert" src="/media/InsertButton.mp3"></audio>
        </div>
    </div>
</div>
