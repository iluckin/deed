@extends('front.app')
@section('content')
    <section class="user-area mt-2">
        <div class="row">
            <div class="col-1 pl-0">
                <img class="service-avatar rounded rounded-circle border-light border-1" src="{{ asset('images/avatar.png') }}" alt="">
            </div>
            <div class="col-auto d-flex justify-content-center text-left">
                <a class=" mt-2 d-inline-block nav-link font-weight-bold text-dark" href="#">
                    登陆享更多服务 <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <section class="banner">
        <div class="row">
            <div class="col px-0 mt-2">
                <div id="carouselExampleIndicators" class="carousel slide banner-box" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="rounded-pill active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rounded-pill"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="rounded-pill carousel-item active">
                            <img src="{{ asset('images/banners/item-2.png') }}" class="d-block w-100" alt="">
                        </div>
                        <div class="rounded-pill carousel-item">
                            <img src="{{ asset('images/banners/item-3.png') }}" class="d-block w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="row mt-2">
            <div class="col mx-0 px-0">
                <a class="px-0 d-inline-block nav-link font-weight-bold text-dark" href="javascript:void 0">
                    圆堂服务
                </a>
            </div>
        </div>
    </section>
@endsection
