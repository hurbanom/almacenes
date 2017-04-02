<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    @if (Auth::user())
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Ubicaciones
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/ubicaciones/create">Agregar</a>
                                </li>
                                <li>
                                    <a href="/ubicaciones">Mostrar Ubicaciones</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Unidades
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/unidades/create">Agregar</a>
                                </li>
                                <li>
                                    <a href="#">Mostrar Unidades</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Categorías
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/categorias/create">Agregar</a>
                                </li>
                                <li>
                                    <a href="#">Mostrar Categorías</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Inventario
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/inventario/create">Nuevo Producto</a>
                                </li>
                                <li>
                                    <a href="/inventario">Mostrar Productos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Stock
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/inventario/createStockProduct">Agregar Stock a Productos</a>
                                </li>
                                <li>
                                    <a href="/inventario/stocks">Productos en Almacenes</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    @endif
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
