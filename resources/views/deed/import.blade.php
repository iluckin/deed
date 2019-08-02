@extends('layouts.app')
@section('title') 产权信息管理 @endsection
@section('main')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-header bg-none border-0">
                    <span class="display-5 text-primary">住宅产权信息管理</span>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="font-weight-bold text-primary">
                                <i class="fa fa-bookmark"></i> 住宅产权信息导入
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-header bg-none">
                                    <div class="row">
                                        <div class="col">
                                            <div class="alert alert-success">
                                                <i class="fa fa-warning"></i> 您当前操作为<b>导入住宅产权信息</b>. 请仔细确认导入信息。
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="e-profile">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="active nav-link">
                                                    <span class="text-dark">住宅产权基本信息</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active text-dark">
                                                <form class="form" action="{{ route('deed.store') }}" novalidate="" name="create-category" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <input type="hidden" name="import" value="{{ csrf_token() }}">
                                                    <div class="row">
                                                        <input type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"  name="file" id="upload" style="width: 0; height: 0; padding: 0 !important; margin: 0 !important;">
                                                        <div class="col text-dark">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>小区 <small class="text-danger">* 必选</small></label>
                                                                        <select name="community_id" class="select2 form-control select2-single">
                                                                            <option value=0>请选择小区</option>
                                                                            @foreach($communities as $community)
                                                                                <option @if($community->id == old('community_id', request('community_id'))) selected @endif value="{{ $community->id }}">{{ $community->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>期号 <small class="text-danger">* 必选</small></label>
                                                                        <select name="batch" class="select2 form-control select2-single">
                                                                            @foreach(\App\Models\Community::getBatch() as $index => $value)
                                                                                <option @if($value == old('batch', request('status', 1))) selected @endif value="{{ $value }}">{{ $value }} 期</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col text-dark">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>状态 <small class="text-danger">* 必选, 请仔细确认当前导入记录状态！</small></label>
                                                                        <select name="status" class="select2 form-control select2-single">
                                                                            @foreach(\App\Models\Deed::status() as $index => $value)
                                                                            <option @if($index == old('status', request('status', 0))) selected @endif value="{{ $index }}">{{ $value }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>类型 <small class="text-danger">* 类型选择</small></label>
                                                                        <select name="type" class="form-control select" id="">
                                                                            <option @if(request('type') == 0) selected  @endif value="0">住宅产权</option>
                                                                            <option @if(request('type') == 1) selected  @endif value="1">商业产权</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label>文件 <small class="text-danger">* 必选</small> &nbsp;&nbsp;&nbsp;
                                                                <span class="text-primary">
                                                                    <a target="_blank" href="{{ route('deed.template') }}">下载导入模板</a>
                                                                </span>
                                                            </label>
                                                            <div class="mx-auto w-100 btn p-0 shadow-none" onclick="$('#upload').click()" style="width: 100%">
                                                                <div class="d-flex justify-content-center align-items-center border-1 rounded" style="height: 80px; border-style: dashed">
                                                                    <span class="text-dark">
                                                                        <i class="fa fa-cloud-upload fa-fw fa-2x"></i> <br>
                                                                        <span class="filename">选择文件</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            @include('components.validate-message')
                                                        </div>
                                                    </div>
                                                    <div class="row">

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
                                        导入文件目前仅支持excel格式. <br>
                                        目前可支持格式后缀名：xls,xlsx,xlsm,xltx,xltm <br>
                                        大小限制为50MB
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
