<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=.5, max-scale=.5,user-scalable=no;">
        <title>圆堂科技</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="{{ asset('h5/favicon.ico') }}">
        <link rel="stylesheet" href="{{ asset('h5/css/app.css') }}">
        @yield('css')
    </head>
    <body>
        <main id="app">
            @yield('content')
        </main>
    </body>
    <!--<script src="https://unpkg.com/feather-icons"></script>-->
    <script src="https://cdn.bootcss.com/feather-icons/4.22.1/feather.min.js"></script>
    <script src="{{ asset('h5/js/app.js') }}"></script>
    <script>
        feather.replace();
    </script>
</html>
