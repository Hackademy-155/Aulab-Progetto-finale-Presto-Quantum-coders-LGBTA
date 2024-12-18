@guest
    <nav class="navbar navbar-expand-lg py-3 px-5 fixed-top navBar ">
        <div class="container-fluid">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="hamburger-menu">
                <span class=""><i class="bi bi-list text-light fs-1 border-0"></i></span>
            </button>
            <div class="collapse navbar-collapse d-md-flex justify-content-md-center  align-items-md-center"
                id="navbarSupportedContent">
                <ul class="navbar-nav w-100">
                    <li class="nav-item g-5 px-3">
                        <a class="nav-link d-flex align-items-center justify-content-center gap-2 " aria-current="page"
                            href="{{ route('home') }}"><i class="bi bi-house-door"></i>{{ __('ui.Home') }}</a>
                    </li>
                    <li class="nav-item g-5 px-3">
                        <a class="nav-link d-flex align-items-center justify-content-center gap-2 " aria-current="page"
                            href="{{ route('product.index') }}"><i
                                class="bi bi-list-columns"></i>{{ __('ui.I nostri prodotti') }}</a>
                    </li>

                    <li class="nav-item  dropdown px-3">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center gap-2 "
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-tags"></i>{{ __('ui.Categorie') }}
                        </a>
                        <ul class="dropdown-menu dropdown-custom">

                            @foreach ($categories as $category)
                                <li class="text-center">
                                    <button class="btn w-100">
                                        <a class="btn dropdown-btn w-100"
                                            href="{{ route('filterByCategory', $category) }}">{{ __('ui.' . $category->name) }}</a>
                                    </button>
                                </li>
                            @endforeach

                        </ul>

                    </li>
                    
                    <li class="nav-item dropdown ms-md-auto text-center">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ __('ui.Seleziona la lingua') }}
                        </a>
                        <ul class="dropdown-menu dropdown-custom  ">
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <li class="d-flex gap-2 nav-item">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="it" />
                                        
                                    </div>
                                </li>
                                <li class="d-flex gap-2 nav-item">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="en" />
                                        
                                    </div>
                                </li>
                                <li class="d-flex gap-2 nav-item">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="fr" />
                                        
                                    </div>
                                </li>
                                <li class="d-flex gap-2  align-items-center">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="de" />
                                      
                                    </div>
                                </li>
                                <li class="d-flex gap-2  align-items-center">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="es" />
                                       
                                    </div>
                                </li>

                                <li class="d-flex gap-2  align-items-center">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="ja" />
                                      
                                    </div>
                                </li>
                                <li class="d-flex gap-2  align-items-center">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="kl" />
                                        
                                    </div>

                                </li>
                            </div>
                            
                        </ul>

                    </li>
                    
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center gap-2"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('ui.Accedi/Registrati') }}
                            </a>
                            <ul class="dropdown-menu dropdown-custom">
                                <li class=" text-center p-0">
                                    <a class="btn dropdown-btn"
                                            href="{{ route('login') }}">{{ __('ui.Accedi') }}</a>
                                </li>
                                <li class=" text-center p-0">
                                   <a class="btn dropdown-btn"
                                            href="{{ route('register') }}">{{ __('ui.Registrati') }}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>
@endguest

@auth
    <nav class="navbar navbar-expand-lg py-3 px-5 fixed-top navBar">
        <div class="container-fluid">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" id="hamburger-menu">
                <span class=""><i class="bi bi-list text-light fs-1 border-0"></i></span>
            </button>
            <div class="collapse navbar-collapse d-md-flex justify-content-md-evenly  align-items-md-center"
                id="navbarSupportedContent">
                <ul class="navbar-nav w-100">
                    <li class="nav-item g-5 px-3">
                        <a class="nav-link d-flex align-items-center justify-content-center gap-2 " aria-current="page"
                            href="{{ route('home') }}"><i class="bi bi-house-door"></i>{{ __('ui.Home') }}</a>
                    </li>
                    <li class="nav-item g-5 px-3">
                        <a class="nav-link d-flex align-items-center justify-content-center gap-2" aria-current="page"
                            href="{{ route('product.index') }}"><i
                                class="bi bi-list-columns"></i>{{ __('ui.I nostri prodotti') }}</a>
                    </li>


                    <li class="nav-item g-5 px-3" aria-current="page">
                        <a class="nav-link d-flex align-items-center justify-content-center gap-2 "
                            href="{{ route('product.create') }}"><i
                                class="bi bi-plus-circle"></i>{{ __('ui.Aggiungi prodotto') }}</a>
                    </li>


                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center gap-2 "
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-tags"></i>{{ __('ui.Categorie') }}
                        </a>
                        <ul class="dropdown-menu dropdown-custom">

                            @foreach ($categories as $category)
                                <li class="text-center">
                                    <button class="btn w-100">
                                        <a class="btn dropdown-btn w-100"
                                            href="{{ route('filterByCategory', $category) }}">{{ __('ui.' . $category->name) }}</a>
                                    </button>
                                </li>
                            @endforeach

                        </ul>

                    </li>

                    <li class="nav-item">
                        <a class=" nav-link d-flex align-items-center justify-content-center gap-2 "
                            data-bs-toggle="offcanvas" href="#offcanvasTop" role="button"
                            aria-controls="offcanvasTop">{{ __('ui.Ricerca') }} <i class="bi bi-search ms-1"></i></a>
                    </li>

                    <li class="nav-item dropdown ms-md-auto text-center  ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ __('ui.Seleziona la lingua') }}
                        </a>
                        <ul class="dropdown-menu dropdown-custom  ">
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <li class="d-flex gap-2 nav-item">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="it" />
                                       
                                    </div>
                                </li>
                                <li class="d-flex gap-2 nav-item">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="en" />
                                      
                                    </div>
                                </li>
                                <li class="d-flex gap-2 nav-item">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="fr" />
                                        
                                    </div>
                                </li>
                                <li class="d-flex gap-2  align-items-center">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="de" />
                                       
                                    </div>
                                </li>
                                <li class="d-flex gap-2  align-items-center">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="es" />
                                       
                                    </div>
                                </li>

                                <li class="d-flex gap-2  align-items-center">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="ja" />
                                        
                                    </div>
                                </li>
                                <li class="d-flex gap-2  align-items-center">
                                    <div class="btn dropdown-btn">
                                        <x-_locale lang="kl" />
                                        
                                    </div>
                                </li>
                        </ul>
                    </li>
                    <li>

                    </li>

                </ul>


                <ul class="navbar-nav">
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center gap-2 "
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('ui.Benvenuto') }} {{ Auth::user()->name }} <i class="bi bi-person"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-custom">
                            @if (Auth::user()->is_revisor)
                                <li class="text-center p-0 d-flex justify-content-center">
                                    <a href="{{ route('revisor.index') }}" class="btn ">
                                        <button class="btn gap-2 dropdown-btn"> <i class="bi bi-journal-arrow-up"></i>
                                            {{ __('ui.Revisiona') }}
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
                                        {{ __('ui.Esci') }}
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

    <div class="offcanvas offcanvas-top OffCanvas-custom p-0 m-0 custom-vertical " tabindex="-1"
        id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="d-flex justify-content-around align-items-center text-center ">

            <button type="button" class="btn-close ms-auto mx-4 mt-4 mb-4 mb-md-1" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body  p-0 ">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-0">
                        <form class="d-flex ms-auto" role="search" action="{{ route('products.search') }}"
                            method="GET">
                            <input class="form-control me-2" name="query" type="search"
                                placeholder="{{ __('ui.Cerca il tuo prodotto...') }}" aria-label="Search">
                            <button class="button-offcanvas text-light btn" type="submit"
                                id="basic-addon2">{{ __('ui.Cerca') }}</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endauth
