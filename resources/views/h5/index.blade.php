@extends('h5.app')
@section('content')
<div class="container-fluid header-container">
    <section class="banner">
        <div class="col mt-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner shadow">
                    <div class="carousel-item active">
                        <img class="d-block w-100 banner-item" src="http://deed.static.wowphp.cn/640.jpeg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="display-5 bold">圆堂科技产权办理产权服务上线了</h4>
                        </div>
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
</div>
<div class="container-fluid service-container pt-4 mt-2 shadow">
    <section class="title my-2 mx-3">
        <div class="row">
            <div class="col">
                <p><span class="display-4 bold ">圆堂服务 </span></p>
            </div>
        </div>
    </section>
    <section class="service my-1">
        <div class="row mx-2 align-items-center">
            <div class="col mx-0 px-0">
                <div class="card border-0" onclick="location.href='query.html?type=1'">
                    <div class="card-body justify-content-center text-center">
                        <p class="card-text">
                            <img style="height: 60px;" src="static/images/zhuzhai_home@2x.png" alt="">
                        </p>
                        <h5 class="card-title text-muted">住宅产权查询</h5>
                        <!--								<h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>-->
                    </div>
                </div>
            </div>
            <div class="col mx-0 px-2">
                <div class="card border-0">
                    <div class="card-body justify-content-center text-center">
                        <p class="card-text">
                            <img style="height: 60px;" src="static/images/shangye_home@2x.png" alt="">
                        </p>
                        <h5 class="card-title text-muted">商业产权查询</h5>
                        <!--								<h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>-->
                    </div>
                </div>
            </div>
            <div class="col mx-0 px-2">
                <div class="card border-0">
                    <div class="card-body justify-content-center text-center">
                        <p class="card-text">
                            <img style="height: 60px;" src="static/images/chewei_home@2x.png" alt="">
                        </p>
                        <h5 class="card-title text-muted">车位产权查询</h5>
                        <!--								<h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>-->
                    </div>
                </div>
            </div>
            <div class="col mx-0 px-0">
                <div class="card border-0">
                    <div class="card-body justify-content-center text-center">
                        <p class="card-text">
                            <img style="height: 60px;" src="static/images/daikuan_home@2x.png" alt="">
                        </p>
                        <h5 class="card-title text-muted">金融贷款</h5>
                        <!--								<h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-2 align-items-center">
            <div class="col-3 mx-0 px-0">
                <div class="card border-0">
                    <div class="card-body justify-content-center text-center">
                        <p class="card-text">
                            <img style="height: 60px;" src="static/images/kuandai_home@2x.png" alt="">
                        </p>
                        <h5 class="card-title text-muted">小区宽带</h5>
                        <!--								<h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>-->
                    </div>
                </div>
            </div>
            <div class="col-3 mx-0 px-2">
                <div class="card border-0">
                    <div class="card-body justify-content-center text-center">
                        <p class="card-text">
                            <img style="height: 60px;" src="static/images/ershoufang_home@2x.png" alt="">
                        </p>
                        <h5 class="card-title text-muted">二手房买卖</h5>
                        <!--								<h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>-->
                    </div>
                </div>
            </div>
            <div class="col-3 mx-0 px-2">
                <div class="card border-0">
                    <div class="card-body justify-content-center text-center">
                        <p class="card-text">
                            <img style="height: 60px;" src="static/images/ershoufang_home_1@2x.png" alt="">
                        </p>
                        <h5 class="card-title text-muted">二手房租售</h5>
                        <!--								<h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="title my-3 mx-3">
        <div class="row">
            <div class="col">
                <p><span class="display-4 bold">品质生活 </span></p>
            </div>
        </div>
    </section>
    <div class="row mx-2 align-items-center">
        <div class="col mx-0 px-0">
            <div class="card border-0">
                <div class="card-body justify-content-center text-center">
                    <p class="card-text">
                        <img style="height: 80px;" src="static/images/youshi_home@2x.png" alt="">
                    </p>
                    <h5 class="card-title text-muted">有人有事</h5>
                    <!--								<h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>-->
                </div>
            </div>
        </div>
        <div class="col mx-0 px-2">
            <div class="card border-0">
                <div class="card-body justify-content-center text-center">
                    <p class="card-text">
                        <img style="height: 80px;" src="static/images/youhua_home@2x.png" alt="">
                    </p>
                    <h5 class="card-title text-muted">有花有树</h5>
                    <!--								<h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>-->
                </div>
            </div>
        </div>
        <div class="col mx-0 px-2">
            <div class="card border-0">
                <div class="card-body justify-content-center text-center">
                    <p class="card-text">
                        <img style="height: 80px;" src="static/images/youjiu_home@2x.png" alt="">
                    </p>
                    <h5 class="card-title text-muted">有食有酒</h5>
                    <!--								<h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>-->
                </div>
            </div>
        </div>
        <div class="col mx-0 px-0">
            <div class="card border-0">
                <div class="card-body justify-content-center text-center">
                    <p class="card-text">
                        <img style="height: 80px;" src="static/images/youwei_home@2x.png" alt="">
                    </p>
                    <h5 class="card-title text-muted">有滋有味</h5>
                    <!--								<h6 class="card-subtitle mb-2 text-muted">省心，放心</h6>-->
                </div>
            </div>
        </div>
    </div>
    <div class="phone-call shadow align-items-center ">
        <a href="javascript:void 0" class="text-muted">
            <i data-feather="help-circle" class="color-primary"></i>
        </a>
    </div>
</div>
@endsection
