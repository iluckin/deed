@extends('layouts.app')
@section('title') 首页 @endsection
@section('main')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-header bg-none border-0">
                    <span class="display-5 text-primary">首页</span>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="font-weight-bold">
                                欢迎使用本系统! <span>{{ ', 今天是 ' . date('Y年m月d日') }}</span>
                            </p>
                        </div>
                    </div>
                    {{--counter--}}
                    <div class="row">
                        <div class="col">
                            <div class="e-metric card mb-3">
                                <div class="card-body">
                                    <div class="e-metric__main">
                                        <span class="e-metric__ico fa-stack">
                                            <i class="fa fa-circle fa-stack-2x text-light"></i>
                                            <i class="fa fa-stack-1x fa-opencart"></i>
                                        </span>
                                        <div class="e-metric__text px-2">
                                            <span class="e-metric__value h5 m-0">0</span>
                                            <div class="e-metric__title"><small class="text-muted">订单</small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="e-metric card mb-3">
                                <div class="card-body">
                                    <div class="e-metric__main">
                                        <span class="e-metric__ico fa-stack">
                                            <i class="fa fa-circle fa-stack-2x text-light"></i>
                                            <i class="fa fa-stack-1x fa-credit-card-alt"></i>
                                        </span>
                                        <div class="e-metric__text px-2">
                                            <span class="e-metric__value h5 m-0">0</span>
                                            <div class="e-metric__title">
                                                <a href="#"><small class="text-muted">会员</small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="e-metric card mb-3">
                                <div class="card-body">
                                    <div class="e-metric__main">
                                        <span class="e-metric__ico fa-stack">
                                            <i class="fa fa-circle fa-stack-2x text-light"></i>
                                            <i class="fa fa-stack-1x fa-user"></i>
                                        </span>
                                        <div class="e-metric__text px-2">
                                            <span class="e-metric__value h5 m-0">1</span>
                                            <div class="e-metric__title"><small class="text-muted">用户</small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="e-metric card mb-3">
                                <div class="card-body">
                                    <div class="e-metric__main">
                                        <span class="e-metric__ico fa-stack">
                                            <i class="fa fa-circle fa-stack-2x text-light"></i>
                                            <i class="fa fa-stack-1x fa-adjust"></i>
                                        </span>
                                        <div class="e-metric__text px-2">
                                            <span class="e-metric__value h5 m-0">1</span>
                                            <div class="e-metric__title"><small class="text-muted">套餐</small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--users--}}
                    <div class="row">
                        <div class="col mb-3">
                            <div class="e-panel card">
                                <div class="card-body">
                                    <div class="h6 font-weight-bold text-left mb-3">
                                        用户 <small>本周</small>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-10">
                                            <canvas id="area-users-chart"></canvas>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="h-100 d-flex flex-row flex-wrap justify-content-center flex-lg-column pt-3 pt-lg-0">
                                                <div class="px-3 py-1 py-md-0 text-center">
                                                    <div class="h4 m-0">1,200</div>
                                                    <div class="text-muted"><small>今日用户</small></div>
                                                </div>
                                                <hr class="w-100 d-none d-lg-block">
                                                <div class="px-3 py-1 py-md-0 text-center">
                                                    <div class="h4 m-0">3,800</div>
                                                    <div class="text-muted"><small>本周用户</small></div>
                                                </div>
                                                <hr class="w-100 d-none d-lg-block">
                                                <div class="px-3 py-1 py-md-0 text-center">
                                                    <div class="h4 m-0">5,000</div>
                                                    <div class="text-muted"><small>本月用户</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Vip--}}
                    <div class="row">
                        <div class="col mb-3">
                            <div class="e-panel card">
                                <div class="card-body">
                                    <div class="h6 font-weight-bold text-left mb-3">
                                        会员 <small>本周</small>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-10">
                                            <canvas id="area-vip-chart"></canvas>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="h-100 d-flex flex-row flex-wrap justify-content-center flex-lg-column pt-3 pt-lg-0">
                                                <div class="px-3 py-1 py-md-0 text-center">
                                                    <div class="h4 m-0">1,200</div>
                                                    <div class="text-muted"><small>今日会员</small></div>
                                                </div>
                                                <hr class="w-100 d-none d-lg-block">
                                                <div class="px-3 py-1 py-md-0 text-center">
                                                    <div class="h4 m-0">3,800</div>
                                                    <div class="text-muted"><small>本周会员</small></div>
                                                </div>
                                                <hr class="w-100 d-none d-lg-block">
                                                <div class="px-3 py-1 py-md-0 text-center">
                                                    <div class="h4 m-0">5,000</div>
                                                    <div class="text-muted"><small>本月会员</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--orders--}}
                    <div class="row">
                        <div class="col mb-3">
                            <div class="e-panel card">
                                <div class="card-body">
                                    <div class="h6 font-weight-bold text-left mb-3">
                                        订单 <small>本周</small>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-10">
                                            <canvas id="area-orders-chart"></canvas>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="h-100 d-flex flex-row flex-wrap justify-content-center flex-lg-column pt-3 pt-lg-0">
                                                <div class="px-3 py-1 py-md-0 text-center">
                                                    <div class="h4 m-0">1,200</div>
                                                    <div class="text-muted"><small>今日订单</small></div>
                                                </div>
                                                <hr class="w-100 d-none d-lg-block">
                                                <div class="px-3 py-1 py-md-0 text-center">
                                                    <div class="h4 m-0">3,800</div>
                                                    <div class="text-muted"><small>本周订单</small></div>
                                                </div>
                                                <hr class="w-100 d-none d-lg-block">
                                                <div class="px-3 py-1 py-md-0 text-center">
                                                    <div class="h4 m-0">5,000</div>
                                                    <div class="text-muted"><small>本月订单</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
