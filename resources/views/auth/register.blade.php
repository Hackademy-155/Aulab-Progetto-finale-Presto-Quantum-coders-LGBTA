<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1 class="display-3 mt-5 text-center">Registrati</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5 mb-md-0 justify-content-center align-items-center">
            <div class="col-12 col-md-8 p-5 p-md-4">
                
                <form class="form shadow" action="{{route('register')}}" method="POST">
                    
                    @csrf
                    
                    <span class="input-span mb-3">
                        <label for="UserName" class="label">Inserisci il tuo username</label>
                        <input type="text" name="name" id="UserName">
                    </span>
                    
                    <span class="input-span mb-3">
                        <label for="email" class="label">Inserisci la tua email</label>
                        <input type="email" name="email" id="email">
                    </span>
                    
                    <span class="input-span mb-3">
                        <label for="password" class="label">Password</label>
                        <input type="password" name="password" id="password">
                    </span>
                    
                    <span class="input-span mb-3">
                        <label for="password_confirmation" class="label">Conferma Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation">
                    </span>
                    
                    
                    <button type="submit" class="submit">Invia</button>
                    <span class="span">Sei già registrato? <a href="{{route('login')}}" class="endformcolor"> Login</a></span>
                </form>
                
            </div>
        </div>
    </div>
    
</x-layout>