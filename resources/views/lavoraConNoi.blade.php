<x-layout>
    <header class="container-fluid">
        <div class="row vh-100 justify-content-center align-items-center gap-5">
            <div class="col-10 col-md-6 d-flex justify-content-center p-0 p-md-5 my-0 my-md-5 flex-column shadow">
                <div class="mb-5">
                    <h1 class="display-4 title-insert-product text-center mt-5 fw-bold">{{__('ui.Lavora con noi')}}</h1>
                </div>
                <form action="{{route('become.revisor')}}" method="GET">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">{{__('ui.Indirizzo e-mail')}}</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">{{__('ui.Nome')}}</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">{{__('ui.Cognome')}}</label>
                        <textarea class="form-control" name="motivazione" id="motivazione" rows="5" name="motivazione"></textarea>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="submit-work-with-us m-3">{{__('ui.Invia')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </header>
</x-layout>