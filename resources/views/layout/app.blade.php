<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>
        <div id="content" class="content">
        <header>
            @include('layout/nav_auth')
            @include('layout/navbar')
        </header>
            @yield('content')
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
