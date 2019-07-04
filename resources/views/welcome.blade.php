<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel-Example') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="container">
                <div class="justify-content-center">
                    <h1 class="welcome-header">
                        Welcome
                    </h1>
                    <div class="navbar navbar-expand-md navbar-light">
                        <ul class="navbar-nav links mr-auto">
                            @foreach($pages as $page)
                                <a href="/{{$page->slug}}" class="nav-link nav-a">{{$page->slug}}</a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>