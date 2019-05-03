<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/spectre-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.pjax.js') }}"></script>
    <script src="{{ asset('js/audio.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
</head>
<body>

<!-- <header>
    <a data-pjax href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
</header> -->

<!-- Authentication Links -->
<div class="menu">
    <a data-pjax href="{{ url('/') }}">
        <img src="/img/logo.png" class="logo" />
    </a>

    <div class="contentMenu">
        @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @else
            <span class="title">Bonjour {{ Auth::user()->name }}</span>
            <br /><br />
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    Déconnexion
            </a>
            <a data-pjax href="/nouvelle">Uploader une chanson</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest

        <div class="separator"></div>

        sdfdsf
    </div>
</div>

<div class="searchBar">
    <form class="search" id="search">
        <span class="loupe"><i class="icon icon-search"></i></span>
        <input type="search" name="search" placeholder="Votre recherche" required />
        <input type="submit" />
    </form>

    <audio class="player" id="audio" controls>
        <source src="" type="audio/mpeg">
    </audio>
</div>

<div class="cover">
    <div class="coverImg"></div>
    <img src="/img/trans.png" class="trans" />
</div>

<div id="main">
    @yield('content')
</div>

</body>
</html>