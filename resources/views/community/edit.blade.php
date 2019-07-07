@extends('layouts.app')
@section('title') 小区管理 @endsection
@section('main')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-header bg-none border-0">
                    <span class="display-5 text-primary">小区管理</span>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="font-weight-bold text-primary">
                                <i class="fa fa-bookmark"></i> 编辑小区
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="e-profile">
{{--                                        <div class="row">--}}
{{--                                            <div class="col-12 col-sm-auto mb-3">--}}
{{--                                                <div class="mx-auto btn p-0 shadow-none" onclick="$('#classes-cover').click()" style="width: 140px;">--}}
{{--                                                    <div class="d-flex justify-content-center align-items-center border-1 bordered-hover rounded cover-box" style="height: 140px;">--}}
{{--                                                        <span class="text-primary">--}}
{{--                                                            <i class="fa fa-folder-open fa-fw fa-2x"></i> <br> 点击选择--}}
{{--                                                        </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">--}}
{{--                                                <div class="text-center text-sm-left mb-2 mb-sm-0">--}}
{{--                                                    <h6 class="pt-sm-2 pb-1 mb-0 text-nowrap">图标</h6>--}}
{{--                                                    --}}{{--<p class="mb-0">尺寸: 400X400</p>--}}
{{--                                                    <div class="text-muted">--}}
{{--                                                        <small>尺寸：400 x 400</small>--}}
{{--                                                        <br>--}}
{{--                                                        <small>类型：jpg, jpeg, gif, png</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="text-center text-sm-right">--}}
{{--                                                    --}}{{--<span class="badge badge-secondary">administrator</span>--}}
{{--                                                    --}}{{--<div class="text-muted"><small>Joined 09 Dec 2017</small></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="active nav-link">
                                                    <span class="text-dark">小区信息</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active text-dark">
                                                <form class="form" action="{{ route('community.update', $item->id) }}" novalidate="" name="create-category" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <input type="file" accept="image/gif, image/jpeg, image/png, image/jpg"  name="cover" id="classes-cover" style="width: 0; height: 0; padding: 0 !important; margin: 0 !important;">
                                                        <div class="col text-dark">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>省 <small class="text-danger">* 必选</small></label>
                                                                        <select name="province_id" class="select2 form-control select2-selection">
                                                                            <option value="1">北京</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>市<small class="text-danger">* 必选</small></label>
                                                                        <select name="city_id" class="select2 form-control select2-selection">
                                                                            @foreach($cities as $city)
                                                                                <option @if($city->id == old('city_id', $item->city_id)) selected @endif value="{{ $city->id }}">{{ $city->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>区<small class="text-danger">* 必选</small></label>
                                                                        <select name="town_id" class="select2 form-control select2-selection">
                                                                            @foreach($towns as $town)
                                                                                <option @if($town->id == old('city_id', $item->town_id)) selected @endif value="{{ $town->id }}">{{ $town->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>小区名称 <small class="text-danger">* 必填</small></label>
                                                                            <input class="form-control" type="text" name="name" placeholder="小区名称" value="{{ old('name', $item->name) }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>联系人 <small class="text-danger"></small></label>
                                                                            <input class="form-control" type="text" name="contact_name" placeholder="联系人" value="{{ old('contact_name', $item->contact_name) }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>联系人电话 <small class="text-danger"></small></label>
                                                                            <input class="form-control" type="text" name="contact_phone" placeholder="联系人电话" value="{{ old('contact_phone', $item->contact_phone) }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>详细地址</label>
                                                                        <input class="form-control" type="text" name="address" placeholder="详细地址" value="{{ old('address', $item->address) }}" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @include('components.validate-message')
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-start">
                                                            <button class="btn btn-primary mr-2" type="submit">保存</button>
                                                            <a class="btn btn-default" href="{{ route('community.index') }}">返回</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold">
                                        <i class="fa fa-sticky-note"></i> 小提示
                                    </h6>
                                    <p class="card-text">
                                        请仔细填写带有红色提示的必填项！
                                    </p>
                                    <a class="btn btn-default" href="{{ route('help.index') }}">
                                        <i class="fa fa-question-circle-o"></i> 更多帮助
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
