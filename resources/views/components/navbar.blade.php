<nav class="navbar navbar-expand-lg p-3 fixed-top navBar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-md-flex justify-content-md-evenly align-items-md-center"
    id="navbarSupportedContent">
    <ul class="navbar-nav">
        <li class="nav-item g-5 px-3">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item g-5 px-3">
            <a class="nav-link active" aria-current="page" href="{{ route('product.index') }}">I nostri
                prodotti</a>
            </li>
            @auth
            <li class="nav-item g-5 px-3" aria-current="page">
                <a class="nav-link active" href="{{ route('product.create') }}">Aggiungi prodotto</a>
            </li>
            @endauth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Categorie
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li>
                    <a class="dropdown-item"
                    href="{{ route('filterByCategory', $category) }}">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
            
        </li>
    </ul>
    @guest
    <ul class="navbar-nav">
        <li class="nav-item dropdown active listDash ">
            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Accedi/Registrati
        </a>
        <ul class="dropdown-menu cardDash">
            <li><a class="dropdown-item listDash" href="{{ route('login') }}">Accedi</a></li>
            <li><a class="dropdown-item listDash" href="{{ route('register') }}">Registrati</a></li>
        </ul>
    </li>
</ul>
@endguest
@auth
<ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Benvenuto {{ Auth::user()->name }}
    </a>
    <ul class="dropdown-menu cardDash">
        <li class="listDash dropdown-item text-center p-0">
            <button class="elementDash btn" href="#">Dati</button>
        </li>                                                   
        <li class="listDash dropdown-item text-center p-0">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="elementDash text-decoration-none btn">Logout</button>
            </form>
        </li>
    </ul>
</li>
</ul>
@endauth
</div>
</div>
</nav>
