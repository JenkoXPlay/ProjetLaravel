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
<!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> -->

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.pjax.js') }}"></script>
    <script src="{{ asset('js/audio.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
</head>
<body>

<header>
    <a href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
</header>

<!-- Authentication Links -->
<nav>
    <ul>
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li> Bonjour {{ Auth::user()->name }}</li>
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                    Logout
                </a></li>
            <li><a data-pjax href="/nouvelle">Uploader une chanson</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>



        @endguest
    </ul>
</nav>

<audio id="audio" controls>
    <source src="" type="audio/mpeg">
</audio>

<form id="search">
    <input type="search" name="search" placeholder="Votre recherche" required />
    <input type="submit" />
</form>

<div id="main">
    @yield('content')
</div>

</body>
</html>