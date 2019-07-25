
@extends('front.app')

@section('content')
<div class="container-fluid">
    <section class="banner">
        <div class="col mt-4">
            <div id="carouselExampleIndicators" class="carousel slide shadow" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 banner-item" src="http://deed.static.wowphp.cn/640.jpeg" alt="First slide">
                        <!--								<div class="carousel-caption d-none d-md-block">-->
                        <!--									<h4 class="display-5 bold">圆堂科技产权办理产权服务上线了</h4>-->
                        <!--								</div>-->
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 banner-item" src="http://deed.static.wowphp.cn/images/banners/20190725/B5d390ff8daac9.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 banner-item" src="http://deed.static.wowphp.cn/images/banners/20190725/B5d390ff8daac9.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 banner-item" src="http://deed.static.wowphp.cn/images/banners/20190725/B5d390ff8daac9.jpg" alt="First slide">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="notice mt-3">
        <div class="row align-items-center">
            <div class="col pl-4 align-items-center pr-0 mr-0">
                <i class="notice-icon text-warning bold" data-feather="volume-1"></i>
            </div>
            <div class="col-9 pt-3 pl-0 ml-0">
                <a href="" class="text-muted">
                    <p class="display-5">💐 圆堂产权办理查询服务上线啦～</p>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <i class="notice-icon text-muted" data-feather="more-horizontal"></i>
                </a>
            </div>
        </div>
    </section>
    <section class="title mt-3 mx-2">
        <div class="row">
            <div class="col">
                <p>
                    <span class="display-4">产权服务 </span>
                    <span class="text-muted"> 专业服务、品质生活</span>
                </p>
            </div>
        </div>
    </section>
    <section class="service">
        <div class="row mx-2 align-items-center">
            <div class="col mx-0 px-0">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <p class="card-text">
                            <img style="height: 60px;" src="{{ asset('images/h5/house.png') }}" alt="">
                        </p>
                        <h5 class="card-title">商业产权查询</h5>
                        <h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>
                    </div>
                </div>
            </div>
            <div class="col mx-0 px-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <p class="card-text">
                            <img style="height: 60px;" src="{{ asset('images/h5/house.png') }}" alt="">
                        </p>
                        <h5 class="card-title">商业产权查询</h5>
                        <h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>
                    </div>
                </div>
            </div>
            <div class="col mx-0 px-0">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <p class="card-text">
                            <img style="height: 60px;" src="{{ asset('images/h5/house.png') }}" alt="">
                        </p>
                        <h5 class="card-title">商业产权查询</h5>
                        <h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
