<nav class="navbar navbar-expand-lg p-3 fixed-top navBar">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-md-flex justify-content-md-evenly align-items-md-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active coloreTasti" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active coloreTasti" aria-current="page" href="{{ route('product.index') }}">I nostri prodotti</a>
            </li>

            @auth
            <li class="nav-item" aria-current="page">
                <a class="nav-link active coloreTasti"  href="{{route('product.create')}}">Aggiungi prodotto</a>
            </li>
            @endauth
        </ul>

        @guest
        <ul class="navbar-nav ">
            <li class="nav-item dropdown ">
                <a class="nav-link coloreTasti dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Accedi/Registrati
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item coloreTasti" href="{{route('login')}}">Accedi</a></li>
                <li><a class="dropdown-item coloreTasti" href="{{route('register')}}">Registrati</a></li>
            </ul>
        </li>
    </ul>
    @endguest

    @auth
    <ul class="navbar-nav justify-content-end">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Benvenuto {{Auth::user()->name}}
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item coloreTasti" href="#">Dati</a></li>
            <li>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit coloreTasti" class="dropdown-item">Logout</button>
                </form>
            </li>
        </ul>
    </li>
</ul>
@endauth

</div>
</div>
</nav>
