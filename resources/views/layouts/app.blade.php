<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tweety') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white mb-5">
        <div class="container">
            <h1>
                <img src="/images/logo.svg" alt="Tweety">
            </h1>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endguest
            </ul>

        </div>
    </nav>
    <section class="px-lg-3">
        <main class="container mx-auto">
            <div class="d-flex justify-content-between mb-5">
                @if (auth()->check())
                    <div class="w-25 mx-3">
                        @include('sidebar-links')
                    </div>
                @endif
                <div
                    class="flex-grow-1 px-4"
                    style="max-width: 700px; min-width: 500px">
                    @yield('content')
                </div>
                @if (auth()->check())
                    <div class="w-25">
                        @include('friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</div>

<script src="http://unpkg.com/turbolinks"></script>
</body>
</html>

