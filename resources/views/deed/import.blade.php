@extends('layouts.app')
@section('title') 产权信息管理 @endsection
@section('main')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-header bg-none border-0">
                    <span class="display-5 text-primary">产权信息管理</span>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="font-weight-bold text-primary">
                                <i class="fa fa-bookmark"></i> 导入产权信息
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="e-profile">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="active nav-link">
                                                    <span class="text-dark">基本信息</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active text-dark">
                                                <form class="form" action="{{ route('deed.store') }}" novalidate="" name="create-category" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="file" accept="image/gif, image/jpeg, image/png, image/jpg"  name="cover" id="classes-cover" style="width: 0; height: 0; padding: 0 !important; margin: 0 !important;">
                                                        <div class="col text-dark">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>省 <small class="text-danger">* 必选</small></label>
                                                                        <select name="category_id" class="select2 form-control select2-selection">
                                                                            <option value=1>北京</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>市 <small class="text-danger">* 必选</small></label>
                                                                        <select name="city_id" class="select2 form-control select2-selection">
                                                                            <option value=0>请选择城市</option>
                                                                            @foreach($communities as $com)
                                                                                <option value={{ $com->id }}>{{ $com->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label>区 <small class="text-danger">* 必选</small></label>
                                                                        <select name="town_id" class="select2 form-control select2-selection">

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-auto mb-3">
                                                            <div class="mx-auto btn p-0 shadow-none" onclick="$('#classes-cover').click()" style="width: 140px;">
                                                                <div class="d-flex justify-content-center align-items-center border-1 bordered-hover rounded cover-box" style="height: 140px;">
                                                        <span class="text-dark">
                                                            <i class="fa fa-file-word-o fa-fw fa-2x"></i> <br> 点击选择
                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                                <h6 class="pt-sm-2 pb-1 mb-0 text-nowrap">产权信息文件</h6>
                                                                {{--<p class="mb-0">尺寸: 400X400</p>--}}
                                                                <div class="text-muted">
                                                                    <small>仅限 xmls/xml 文件</small>
                                                                    <br>
                                                                    <small>大小限制为 100M</small>
                                                                </div>
                                                            </div>
                                                            <div class="text-center text-sm-right">
                                                                {{--<span class="badge badge-secondary">administrator</span>--}}
                                                                {{--<div class="text-muted"><small>Joined 09 Dec 2017</small></div>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        @include('components.validate-message')
                                                        <div class="col d-flex justify-content-start">
                                                            <button class="btn btn-primary mr-2" type="submit">导入</button>
                                                            <a class="btn btn-default" href="{{ route('deed.index') }}">返回</a>
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
                                        这里是对当前操作的很长很长的提示和快捷操作说明等.
                                        这里是对当前操作的很长很长的提示和快捷操作说明等.
                                        这里是对当前操作的很长很长的提示和快捷操作说明等.
                                        这里是对当前操作的很长很长的提示和快捷操作说明等.
                                        这里是对当前操作的很长很长的提示和快捷操作说明等.
                                    </p>
                                    <a class="btn btn-default">
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
