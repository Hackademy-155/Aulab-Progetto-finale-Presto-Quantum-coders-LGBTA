<form class="shadow p-5 rounded-4 bg-form">
    <h1 class="fw-bold text-center mb-5">{{__('ui.Modifica il prodotto')}}</h1>
    <div class="mb-3">
        <label for="title" class="form-label">{{__('ui.Titolo')}}</label>
        <input type="text" class="form-control" id="title" >
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">{{__('ui.Prezzo')}}</label>
        <input type="text" class="form-control" id="price">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">{{__('ui.Descrizione')}}</label>
        <input type="text" class="form-control" id="description">
    </div>
    <button type="submit" class="btn btn-dark">{{__('ui.Aggiungi')}}</button>
</form>
