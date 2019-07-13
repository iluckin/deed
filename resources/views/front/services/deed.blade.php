@extends('front.app')
@section('content')
    <section class="user-area mt-2">
        <div class="row">
            <div class="col-4 pl-1">
                <a class="mt-1 px-0 d-inline-block nav-link font-weight-bold text-dark title" href="javascript:void 0">
                    产权查询
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
                <div style="height: 80px" id="carouselExampleIndicators" class="carousel slide banner-box shadow rounded" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="rounded-pill active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="rounded-pill carousel-item active" data-interval="2500">
                            <img src="{{ asset('images/banners/item-2.png') }}" class="d-block w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="row mt-3">
            <div class="col-12 px-0">
                <h6>查询办理信息查询</h6>
            </div>
            <div class="col-12 px-0">
                <div>
                    @csrf
                    <div class="row">
                        <div class="col text-dark">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>选择您房产所属小区 <small class="text-danger">* 必填</small></label>
                                            <select name="community" class="form-control" id="">
                                                <option value="0">请选择小区</option>
                                                @foreach(\App\Services\CommunityService::selectItems() as $com)
                                                    <option value="{{ $com->id }}">{{ $com->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>楼号 <small class="text-danger">* 必填</small></label>
                                            <input class="form-control" type="number" name="floor" placeholder="楼号" value="{{ old('unit') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>单元 <small class="text-danger">* 必填</small></label>
                                            <input class="form-control" type="number" name="unit" placeholder="单元" value="{{ old('room') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>房间 <small class="text-danger">* 必填</small></label>
                                            <input class="form-control" type="text" name="room" placeholder="房间" value="{{ old('room') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 alert-message" style="display: none">
                            <div class="alert alert-warning py-1 ">
                                <small>
                                    <i class="fa fa-warning"></i> <span class="message">请仔细填写以上信息</span>
                                </small>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button style="height: 43px;" class="btn btn-primary btn-block deed-query" type="btn">查 询</button>
                        </div>
                    </div>

                    <div style="display: none" class="row result-message-box mt-3">
                        <div class="col-12">
                            <div class="alert alert-primary ">
                                <i class="fa fa-check-circle-o text-success"></i> &nbsp;&nbsp;
                                <span class="result-message"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
