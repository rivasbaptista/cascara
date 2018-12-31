<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - gestor de casos</title>

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content blue-grey darken-4  grey-text ">
            <li><a href=""><i class="material-icons">account_box</i>Perfil</a></li>
            <li><a href=""><i class="material-icons small">settings</i>Admin</a></li>
            <li class="divider"></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i>Salir</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

        </ul>


        <div class="navbar-fixed">
            <nav>
              <div class="nav-wrapper blue-grey darken-4">
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <a href="#!" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
            {{--       <li><a href="sass.html">Sass</a></li>
                  <li><a href="badges.html">Components</a></li> --}}
                  <!-- Dropdown Trigger -->
                  <li><a class="dropdown-trigger" href="" data-target="dropdown1"><i class="material-icons right">arrow_drop_down</i>{{ Auth::user()->name }}</a>
                  </li>
                </ul>
              </div>
            </nav>
        </div>      

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
