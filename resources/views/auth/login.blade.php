<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1 class="display-3 mt-5">Accedi</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-6 shadow p-5 rounded-3">

                <form action="{{route('login')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                      <label for="email" class="form-label">Inserisci la tua mail</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="remember" name="remember">
                      <label class="form-check-label" for="remember">Ricordami</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                  </form>
            </div>
        </div>
    </div>
    
</x-layout>