<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@section('title') - 主页 @show</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <main class="py-5" id="app" style="margin-left: 0 !important;">
            @yield('main')
        </main>
        <div class="row">
            <div class="col text-center">
                <p class="text-black-50"><small> &copy; 2019 <a href="#" class="text-black-50">圆堂科技</a> </small></p>
            </div>
        </div>
    </body>
</html>
