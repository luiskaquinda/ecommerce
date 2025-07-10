<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Ecommerce')</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>  


    <nav>
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo center">Ecommerce</a>
            <ul id="nav-mobile" class="left">
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger" href='#' data-target='dropdown1'>Categorias
                    <i class="material-icons right">expand_more</i></a>
                </li>
                <li><a href="{{ route('site.carrinho') }}">Carrinho <span class="new badge blue" data-badge-caption=""> {{ \Cart::getContent()->count() }} </span> </a></li>
            </ul>

            @auth
                <ul id="nav-mobile" class="right">
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger" href='#' data-target='dropdown2'>Olá {{ auth()->user()->firstName }}
                        <i class="material-icons right">expand_more</i></a>
                    </li>
                </ul>
            @else
                <ul id="nav-mobile" class="right">
                    <!-- Dropdown Trigger -->
                    <li><a href="{{ route('login.form') }}">Login <i class="material-icons right">lock</i></a>
                    </li>
                </ul>
            @endauth
        </div>
    </nav>

    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>
        @foreach ($categoriasMenu as $categoriaM)
            <li><a href="{{ route('site.categoria', $categoriaM->id) }}">{{ $categoriaM->nome }}</a></li>
        @endforeach
    </ul>

    <!-- Dropdown Structure -->
    <ul id='dropdown2' class='dropdown-content'>
        <li>
            <a href="{{ route('admin.dashboard') }}">
                Dash
            </a> 
        </li>
        <li>
            <a href="{{ route('login.logout') }}">
                Sair
            </a> 
        </li>
    </ul>

    <main>
        @yield('conteudo')
    </main>

    <!-- Compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        // var elemDrop = document.querySelectorAll('.dropdown-trigger');
        // var instanceDrop = M.Dropdown.init(elemDrop, (
        //     coverTrigger: false,
        //     constrairWidth: false
        // ));
        $('.dropdown-trigger').dropdown();
        // document.addEventListener('DOMContentLoaded', function() {
        //     var elems = document.querySelectorAll('.dropdown-trigger');
        //     var instances = M.Dropdown.init(elems, options);
        // });
    </script>
</body>
</html>