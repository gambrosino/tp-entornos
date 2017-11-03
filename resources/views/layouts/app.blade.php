<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '¡No te lo pierdas!') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                      <h1 class="title is-5">
                        <span class="icon">
                            <i class="fa fa-calendar-o"></i>
                        </span>
                        ¡No te lo pierdas!
                    </h1>
                </a>
                <div class="navbar-burger burger" data-target="navMenuTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item is-active" href="{{ route('events') }}">
                        Eventos
                    </a>
                </div>
                <div class="navbar-end">
                    <div class="navbar-item is-active">
                        <a href="#" class="button is-info is-outlined">
                            <span class="icon">
                                <i class="fa fa-sign-in"></i>
                            </span>
                            <span>Ingresar</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')

    </div>

    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <strong>Evnts</strong> desarrollado por <a href="http://github.com/gambrosino" target="_blank">Guido Ambrosino</a> para la cátedra Entornos Gráficos - UTN FRRo - Año 2017
                </p>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('js-import')

</body>
</html>
