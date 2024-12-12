<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-12 text-center mt-5">
                <h1 class="display-2 fw-bold mt-5 text-center">{{__('ui.Accedi')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-5 mb-md-0 justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center p-5 p-md-4">
                
                <form class="form shadow" action="{{route('login')}}" method="POST">
                    
                    @csrf
                    
                    <span class="input-span mb-3">
                        <label for="email" class="label">{{__('ui.Inserisci la tua email')}}</label>
                        <input type="email" name="email" id="email">
                    </span>
                    
                    <span class="input-span mb-3">
                        <label for="password" class="label">{{__('ui.Password')}}</label>
                        <input type="password" name="password" id="password">
                    </span>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">{{__('ui.Ricordami')}}</label>
                    </div>
                    
                    <input class="submit" type="submit" value="Log in" >
                    
                    <span class="span">{{__('ui.Non hai un account?')}} <a href="{{route('register')}}" class="endformcolor"> {{__('ui.Registrati')}}</a></span>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>
