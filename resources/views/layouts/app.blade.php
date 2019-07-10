<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@section('title') - 主页 @show</title>

    <link rel="dns-prefetch" href="//fonts-gstatic.lug.ustc.edu.cn">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script src="{{ mix('js/app.js') }}" defer></script>
    @yield('scripts')
</head>
<body>
<div id="app">
    <div class="header">
        <nav class="e-navbar navbar navbar-expand-md card mb-2 border-0 shadow-sm">
            <div class="e-navbar__cont flex-md-nowrap py-1 e-navbar-box">
                <div id="d-collapse" class="e-navbar__nav navbar-collapse order-4 order-md-2 collapse navbar-collapse">
                    <div class="d-md-flex">
                        <ul class="navbar-nav mr-auto py-3 py-md-0 nav"></ul>
                    </div>
                </div>
                <div class="e-navbar__actions ml-3">
                    <ul class="navbar-nav flex-nowrap flex-row">
                        <li class="nav-item d-none d-md-inline-block">
                            <a class="nav-link mt-1" href="" onclick="return false">
                                <i class="fa fa-bell-o"></i>
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <span class="d-none d-md-inline">
                                            <img src="{{ asset('images/avatar.png') }}" alt="" class="sidebar-avatar img-thumbnail rounded-circle">
                                        </span>
                                <span class="d-md-none fa fa-user-circle"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right bg-white">
                                <a class="dropdown-item disabled text-primary" href="" onclick="return false">{{ auth()->user()->name }}</a>
                                <a class="dropdown-item" href="" onclick="return false">个人中心</a>
                                <a class="dropdown-item" href="" onclick="return false">安全设置</a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">退出登陆</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="sidebar">
        <div class="navbar-brand d-none d-md-block text-center mt-3 mx-3">
            <a class="e-logo text-center" href="{{ route('home') }}">
                <span class="e-logo-text">产权办理 <small class="ml-1 mt-2">Ver 0.0.1</small></span>
            </a>
        </div>
        <div class="e-navlist my-2">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link px-2 text-center {{ sideBarActive('home') }}"  href="{{ route('home') }}">
                        <i class="fa fa-2x fa-fw fa-home my-2"></i><br>
                        <span>首页</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-center {{ sideBarActive('deed') }}"  href="{{ route('deed.index') }}">
                        <i class="fa fa-2x fa-fw fa-address-card-o my-2"></i><br>
                        <span>产权</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-center {{ sideBarActive('community') }}" href="{{ route('community.index') }}">
                        <i class="fa fa-2x fa-fw fa-fort-awesome my-2"></i><br>
                        <span>小区</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-center {{ sideBarActive('help') }}" href="{{ route('help.index') }}">
                        <i class="fa fa-2x fa-fw fa-question-circle my-2"></i><br>
                        <span>帮助</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <main class="main">
        <div class="container-fluid">
            @yield('main')
        </div>
    </main>
    <div class="browser">
        <div class="alert alert-warning">
            <p><i class="fa fa-warning"></i> 兼容性提示</p>
            检测到您使用的不是 Google Chrome 浏览器. 可能存在部分功能兼容性问题 <br> 引发的无法使用，建议您点击<a target="_blank" href="https://www.google.com/intl/zh-CN/chrome/">下载 Google Chrome</a>浏览器.
        </div>
    </div>
</div>
</body>
</html>
