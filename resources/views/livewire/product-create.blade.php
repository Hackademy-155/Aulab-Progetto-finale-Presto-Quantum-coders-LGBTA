<div class="container-fluid">
    <div class="row mb-5 justify-content-center align-items-center ">
        <div class="col-10 col-md-12 d-flex justify-content-center p-0 p-md-5 my-0 my-md-5">
            <form wire:submit="create" class="form shadow">
                @csrf

                <h2 class="fw-bold text-center mb-5 title-insert-product display-4">Aggiungi il tuo prodotto</h2>

                <span class="input-span mb-3">
                    <label for="title" class="label">Titolo</label>
                    <input type="text" id="title" wire:model.live.blur="title">
                    @error('title')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </span>

                <span class="input-span mb-3">
                    <label for="category" class="label">Categoria</label>
                    <select id="category" wire:model="category" class="form-select mb-3 custom-select">
                        <option value="" disabled selected>Seleziona la categoria</option>
                        @foreach ($categories as $category)
                            <option class="custom-option" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </span>

                <span class="input-span mb-3">
                    <label for="price" class="label">Prezzo</label>
                    <input type="number" id="price" wire:model.live.blur="price">
                    @error('price')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </span>

                <span class="input-span mb-3">
                    <input type="file" wire:model.live="temporary_images" multiple
                        class="form-control shadow @error('temporary_images.*') is-invalid @enderror"
                        placeholder="Img/">
                    @error('temporary_images.*')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                    @error('temporary_images.')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </span>
                @if (!empty($images))
                    <div class="row">
                        <div class="col-12">
                            <p>Photo preview: </p>
                            <div class="row border border-4 border-success rounded shadow py-4">
                                @foreach ($images as $key => $image)
                                    <div class="col d-flex flex-column align-items-center my-3">
                                        <div class="img-preview mx-auto shadow rounded"
                                            style="background-image: url({{ $image->temporaryUrl() }});"></div>
                                            <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{$key}})">X</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif



                <span class="input-span mb-3">
                    <label for="description" class="label">Descrizione</label>
                    <textarea type="text" name="description" id="description" wire:model.live.blur="description"></textarea>
                    @error('description')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </span>

                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif --}}

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <button id="Insert" type="submit" class="submit" wire:ignore>Aggiungi</button>

            </form>
            <audio id="audioInsert" src="/media/InsertButton.mp3"></audio>
        </div>
    </div>
</div>
