@extends('front.app')
@section('content')
    <section class="user-area mt-2">
        <div class="row">
            <div class="col-4 pl-1">
                <a class="mt-1 px-0 d-inline-block nav-link font-weight-bold text-dark title" href="javascript:void 0">
                    有人有事
                </a>
            </div>
            <div class="col-8 pr-0">
                <div class="row pull-right">
                    <div class="ml-0 col-auto d-flex justify-content-end text-right px-0">
                        <a class="mt-2 d-inline-block nav-link text-dark" href="#">
                            登陆享更优质服务<i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-1 pl-0">
                        <img class="service-avatar rounded rounded-circle border-light border-1" src="{{ asset('images/avatar.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner">
        <div class="row">
            <div class="col px-0 mt-1">
                <div id="carouselExampleIndicators" class="carousel slide banner-box shadow rounded" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="rounded-pill active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rounded-pill"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="rounded-pill carousel-item active" data-interval="2500">
                            <img src="{{ asset('images/banners/item-2.png') }}" class="d-block w-100 rounded" alt="">
                        </div>
                        <div class="rounded-pill carousel-item" data-interval="2500">
                            <img src="{{ asset('images/banners/item-3.png') }}" class="d-block w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="row mt-2">
            <div class="col-4 px-0 shadow-sm">
                <a href="{{ route('service.someone.deed') }}">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="fa fa-fort-awesome text-dark"></i>
                            </h5>
                            <a href="#" class="text-dark btn-link card-link">产权查询</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 px-0 mx-2 shadow-sm" onclick="alert('更多服务敬请期待！')">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-yelp text-dark"></i></h5>
                        敬请期待
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
