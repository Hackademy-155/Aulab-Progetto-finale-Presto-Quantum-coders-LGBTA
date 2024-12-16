<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-5">
                <h1 class="display-2 title-custom mt-5 text-center">{{__('ui.Registrati')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-5 mb-md-0 justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center p-5 p-md-4">

                <form class="form shadow" action="{{route('register')}}" method="POST">

                    @csrf

                    <span class="input-span mb-3">
                        <label for="UserName" class="label">{{__('ui.Inserisci il tuo username')}}</label>
                        <input type="text" name="name" id="UserName">
                    </span>

                    <span class="input-span mb-3">
                        <label for="email" class="label">{{__('ui.Inserisci la tua email')}}</label>
                        <input type="email" name="email" id="email">
                    </span>

                    <span class="input-span mb-3">
                        <label for="password" class="label">{{__('ui.Password')}}</label>
                        <div class="d-flex gap-2">
                            <input type="password" name="password" id="password">
                            <a id="eyeBtn" class="eye"><i class="bi bi-eye"></i></a>
                        </div>
                    </span>

                    <span class="input-span mb-3">
                        <label for="password_confirmation" class="label">{{__('ui.Conferma Password')}}</label>
                        <div class="d-flex gap-2">
                            <input type="password" name="password_confirmation" id="password_confirmation">
                            <a id="eyeBtnConfirmation" class="eye"><i class="bi bi-eye"></i></a>
                        </div>
                    </span>


                    <button type="submit" class="submit1">{{__('ui.Invia')}}</button>
                    <span class="span">{{__('ui.Sei già registrato?')}}<a href="{{route('login')}}" class="endformcolor"> Login</a></span>
                </form>

            </div>
        </div>
    </div>

</x-layout>