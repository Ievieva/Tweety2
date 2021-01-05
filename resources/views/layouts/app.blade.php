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
    <section class="px-lg-3 py-4">
        <header class="container mx-auto pb-2">
            <h1>
                <img src="/images/logo.svg" alt="Tweety">
            </h1>
        </header>
    </section>
    <section class="px-lg-3">
        <main class="container mx-auto">
            <div class="d-flex justify-content-between">
                @if (auth()->check())
                    <div class="w-25 ml-2">
                        @include('sidebar-links')
                    </div>
                @endif
                <div class="flex-grow-1 px-2 pr-4" style="max-width: 700px">
                    @yield('content')
                </div>
                @if (auth()->check())
                    <div class="w-25 bg-light rounded-xl p-4">
                        @include('friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</div>
</body>
</html>

