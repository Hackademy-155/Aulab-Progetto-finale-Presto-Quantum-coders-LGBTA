<x-layout>
    <header class="container-fluid">
        <div class="row vh-100 justify-content-center align-items-center gap-5">
            <div class="col-5 bg-main p-5 rounded-5 shadow">
                <div class="mb-5">
                    <h1 class="display-4 title-insert-product text-center">Lavora con noi</h1>
                </div>
                <form action="{{route('become.revisor')}}" method="GET">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo e-mail</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Motivazione</label>
                        <textarea class="form-control" name="motivazione" id="motivazione" rows="5" name="motivazione"></textarea>
                    </div>
                    <button type="submit" class="submit-work-with-us">Submit</button>
                </form>
            </div>
        </div>
    </header>

    <main>
        <section class="container">
            <div class="row vh-50 my-5 justify-content-center align-items-center">

            </div>
        </section>
    </main>
</x-layout>