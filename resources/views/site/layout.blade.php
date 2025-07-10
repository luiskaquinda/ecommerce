<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title', 'Ecommerce')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        {{-- Start Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        {{-- End Bootstrap --}}

        <link href="{{ asset('herculano/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">HercShop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Sobre</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriasDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                              Categorias
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="categoriasDropdown">
                              @foreach ($categoriasMenu as $categoriaM)
                                <li>
                                  <a class="dropdown-item" href="{{ route('site.categoria', $categoriaM->id) }}">
                                    {{ $categoriaM->nome }}
                                  </a>
                                </li>
                              @endforeach
                            </ul>
                        </li>
                    </ul>
                    
                    <div class="d-flex">
                        <ul class="btn btn-outline-dark">
                            <li style="list-style: none;">
                                <a class="bi-cart-fill me-1" style="text-decoration: none; color: #020202;" href="{{ route('site.carrinho') }}"
                                onmouseover="this.style.color='white'"
                                onmouseout="this.style.color='#020202';"
                                >Carrinho
                                    <span class="badge bg-dark text-white ms-1 rounded-pill">{{ \Cart::getContent()->count() }}</span>
                                </a>
                            </li>
                        </ul>
                        @auth
                            <div class="dropdown mx-2">
                                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name ?? 'User'}}
                                </button>
                                <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('login.logout') }}">Sair</a></li>                                
                                </ul>
                            </div>
                        @else
                        <div class="mx-2">

                            <a class="btn btn-dark" href="{{ route('login.form') }}" role="button">Entrar</a>
                        </div>
                        @endauth

                    </div>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">HERCSHOP</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Compre com estilo, seja ousado</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        @yield('conteudo')
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Herculano 2025</p></div>
        </footer>
        {{-- Start Bootstrap --}}
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
        {{-- End Bootstrap --}}

        <script src="js/scripts.js"></script>
    </body>
</html>
