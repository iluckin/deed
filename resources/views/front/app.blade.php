<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') 有人有事 @show</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .element::-webkit-scrollbar { width: 0 !important }
    .element { -ms-overflow-style: none; }
    .element { overflow: -moz-scrollbars-none; }
    * {
        scroll-behavior: unset;
    }
</style>
<body style="min-height: 10px;">
<div id="app">
    <div class="container-fluid">
        @yield('content')
    </div>
</div>
</body>
</html>
