<nav class="navbar navbar-expand-lg p-3 fixed-top navBar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-md-flex justify-content-md-evenly  align-items-md-center"
    id="navbarSupportedContent">
    <ul class="navbar-nav">
        <li class="nav-item g-5 px-3">
            <a class="nav-link active d-flex align-items-center justify-content-center gap-2" aria-current="page" href="{{ route('home') }}"><i class="bi bi-house-door"></i>Home</a>
        </li>
        <li class="nav-item g-5 px-3">
            <a class="nav-link active d-flex align-items-center justify-content-center gap-2" aria-current="page" href="{{ route('product.index') }}"><i class="bi bi-list-columns"></i>I nostri
                prodotti</a>
            </li>

            @auth
            <li class="nav-item g-5 px-3" aria-current="page">
                <a class="nav-link active d-flex align-items-center justify-content-center gap-2" href="{{ route('product.create') }}"><i class="bi bi-plus-circle"></i>Aggiungi prodotto</a>
            </li>
            @endauth

            <li class="nav-item  dropdown px-3">
                <a class="nav-link dropdown-toggle active d-flex align-items-center justify-content-center gap-2" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-tags"></i>Categorie
            </a>
            <ul class="dropdown-menu cardDash">

                @foreach ($categories as $category)
                <li class="listDash dropdown-item text-center">
                    <button class="elementDash btn">
                        <a class="btn"
                        href="{{ route('filterByCategory', $category) }}">{{ $category->name }}</a>
                    </button>
                </li>
                @endforeach

            </ul>

        </li>
    </ul>

    @guest
    <ul class="navbar-nav">
        <li class="nav-item dropdown active cardDash px-3">
            <a class="nav-link active dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Accedi/Registrati
        </a>
        <ul class="dropdown-menu cardDash">
            <li class="listDash dropdown-item text-center p-0">
                <button class="elementDash btn"><a href="{{ route('login') }}">Accedi</a></button>
            </li>
            <li class="listDash dropdown-item text-center p-0">
                <button class="btn elementDash"><a href="{{ route('register') }}">Registrati</a></button>
            </li>
        </ul>
    </li>
</ul>
@endguest

@auth
<ul class="navbar-nav">
    <li class="nav-item dropdown px-3">
        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center gap-2" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Benvenuto {{ Auth::user()->name }} <i class="bi bi-person"></i>
    </a>
    <ul class="dropdown-menu cardDash">
        <li class="listDash dropdown-item text-center p-0">
            <button class="elementDash btn d-flex align-items-center justify-content-center gap-2" href="#"><i class="bi bi-person-lines-fill"></i>Dati</button>
        </li>
        <li class="listDash dropdown-item text-center p-0">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button
                type="submit"
                class="elementDash text-decoration-none btn d-flex align-items-center justify-content-center gap-2">
                <i class="bi bi-box-arrow-in-left fs-4"></i>
                Logout
            </button>

        </form>
    </li>
</ul>
</li>
</ul>
@endauth

</div>
</div>
</nav>
