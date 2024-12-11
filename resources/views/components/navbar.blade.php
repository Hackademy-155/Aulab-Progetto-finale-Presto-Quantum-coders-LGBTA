@guest
    <nav class="navbar navbar-expand-lg p-3 fixed-top navBar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="hamburger-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-md-flex justify-content-md-center  align-items-md-center"
                id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item g-5 px-3">
                        <a class="nav-link d-flex align-items-center justify-content-center gap-2 " aria-current="page"
                            href="{{ route('home') }}"><i class="bi bi-house-door"></i>Home</a>
                    </li>
                    <li class="nav-item g-5 px-3">
                        <a class="nav-link d-flex align-items-center justify-content-center gap-2 " aria-current="page"
                            href="{{ route('product.index') }}"><i class="bi bi-list-columns"></i>I nostri
                            prodotti</a>
                    </li>

                    <li class="nav-item  dropdown px-3">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center gap-2 "
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-tags"></i>Categorie
                        </a>
                        <ul class="dropdown-menu dropdown-custom">

                            @foreach ($categories as $category)
                                <li class="text-center">
                                    <button class="btn w-100">
                                        <a class="btn dropdown-btn w-100"
                                            href="{{ route('filterByCategory', $category) }}">{{ $category->name }}</a>
                                    </button>
                                </li>
                            @endforeach

                        </ul>

                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center gap-2"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Accedi/Registrati
                        </a>
                        <ul class="dropdown-menu dropdown-custom">
                            <li class=" text-center p-0">
                                <button class=" btn"><a class="btn dropdown-btn"
                                        href="{{ route('login') }}">Accedi</a></button>
                            </li>
                            <li class=" text-center p-0">
                                <button class="btn"><a class="btn dropdown-btn"
                                        href="{{ route('register') }}">Registrati</a></button>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endguest

@auth
    <nav class="navbar navbar-expand-lg py-3 fixed-top navBar">
        <div class="container-fluid">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" id="hamburger-menu">
                <span class=""><i class="bi bi-list text-light fs-1"></i></span>
            </button>
            <div class="collapse navbar-collapse d-md-flex justify-content-md-evenly  align-items-md-center"
                id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item g-5 px-3">
                        <a class="nav-link d-flex align-items-center justify-content-center gap-2 " aria-current="page"
                            href="{{ route('home') }}"><i class="bi bi-house-door"></i>Home</a>
                    </li>
                    <li class="nav-item g-5 px-3">
                        <a class="nav-link d-flex align-items-center justify-content-center gap-2" aria-current="page"
                            href="{{ route('product.index') }}"><i class="bi bi-list-columns"></i>I nostri
                            prodotti</a>
                    </li>


                    <li class="nav-item g-5 px-3" aria-current="page">
                        <a class="nav-link d-flex align-items-center justify-content-center gap-2 "
                            href="{{ route('product.create') }}"><i class="bi bi-plus-circle"></i>Aggiungi prodotto</a>
                    </li>


                    <li class="nav-item  dropdown px-3">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center gap-2 "
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-tags"></i>Categorie
                        </a>
                        <ul class="dropdown-menu dropdown-custom">

                            @foreach ($categories as $category)
                                <li class="text-center">
                                    <button class="btn w-100">
                                        <a class="btn dropdown-btn w-100"
                                            href="{{ route('filterByCategory', $category) }}">{{ $category->name }}</a>
                                    </button>
                                </li>
                            @endforeach

                        </ul>

                    </li>

                    <li class="nav-item">
                        <a class="btn nav-link" data-bs-toggle="offcanvas" href="#offcanvasTop" role="button"
                            aria-controls="offcanvasTop">Ricerca <i class="bi bi-search ms-1"></i></a>
                    </li>

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center gap-2 "
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto {{ Auth::user()->name }} <i class="bi bi-person"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-custom">
                            <li class=" d-flex  justify-content-center p-0 mb-2">
                                <button class="btn d-flex align-items-center justify-content-center gap-2 dropdown-btn"
                                    href="#"><i class="bi bi-person-lines-fill"></i>Dati</button>
                            </li>
                            @if (Auth::user()->is_revisor)
                                <li class="text-center p-0 d-flex justify-content-center">
                                    <a href="{{ route('revisor.index') }}" class="btn dropdown-btn">
                                        <button class="btn gap-2 dropdown-btn"> <i class="bi bi-journal-arrow-up"></i>
                                            Revisiona
                                            <span class="badge rounded-pill bg-danger">
                                                <livewire:product-counter />
                                            </span>
                                        </button>
                                    </a>
                                </li>
                            @endif

                            <li class=" text-center p-0 d-flex  justify-content-center">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="text-decoration-none btn d-flex align-items-center justify-content-center gap-2 dropdown-btn">
                                        <i class="bi bi-box-arrow-in-left fs-4"></i>
                                        Logout
                                    </button>
                                </form>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- offcanvas --}}
    <div class="offcanvas offcanvas-top OffCanvas-custom" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-light" id="offcanvasTopLabel">Ricerca del prodotto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="d-flex ms-auto" role="search" action="{{ route('products.search') }}" method="GET">
                <input class="form-control me-2" name="query" type="search" placeholder="Carca il tuo prodotto..."
                    aria-label="Search">
                <button class="button-offcanvas text-light btn" type="submit" id="basic-addon2">Cerca</button>
            </form>
        </div>
    </div>
@endauth
