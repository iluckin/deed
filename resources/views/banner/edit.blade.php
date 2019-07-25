@extends('layouts.app')
@section('title') 内容管理 @endsection
@section('main')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-header bg-none border-0">
                    <span class="display-5 text-primary">轮播图管理</span>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="font-weight-bold text-primary">
                                <i class="fa fa-bookmark"></i> 编辑轮播图
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
                                                    <span class="text-dark">轮播图信息</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active text-dark">
                                                <form class="form" action="{{ route('banner.update', $item->id) }}" novalidate="" name="create-category" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <input type="file" accept="image/gif, image/jpeg, image/png, image/jpg"  name="file" id="upload" style="width: 0; height: 0; padding: 0 !important; margin: 0 !important;">
                                                        <div class="col text-dark">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>标题 <small class="text-danger">* 必填</small></label>
                                                                            <input class="form-control" type="text" name="title" placeholder="标题" value="{{ old('title', $item->title) }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>发布 <small class="text-danger">* 是否发布</small></label>
                                                                            <select name="publish" id="" class="select2 select2-single">
                                                                                <option @if($item->published_at) selected @endif value="1">是</option>
                                                                                <option @if(!$item->published_at) selected @endif value="0">否</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>链接 <small class="text-danger">* 必填</small></label>
                                                                            <input class="form-control border-1" style="border-style: dashed" type="text" name="link" placeholder="http(s)://" value="{{ old('link', $item->link) }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-3">
                                                                    <label>图片 <small class="text-danger">* 必选</small> &nbsp;&nbsp;&nbsp;</label>
                                                                    <div class="mx-auto w-100 btn p-0 shadow-none" style="width: 100%">
                                                                        <div class="d-flex justify-content-center align-items-center border-1 rounded" style="height: 150px; border-style: dashed">
                                                                            <span class="text-dark">
                                                                                <img src="{{ $item->image }}" alt="" class="img-thumbnail" style="height: 150px">
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=" mt-2 mx-auto w-100 btn p-0 shadow-none" onclick="$('#upload').click()" style="width: 100%">
                                                                        <div class="d-flex justify-content-center align-items-center border-1 rounded" style="height: 80px; border-style: dashed">
                                                                            <span class="text-dark">
                                                                                <i class="fa fa-cloud-upload fa-fw fa-2x text-danger"></i> <br>
                                                                                <span class="filename">更换图片</span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @include('components.validate-message')
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-start">
                                                            <button class="btn btn-primary mr-2" type="submit">保存</button>
                                                            <a class="btn btn-default" href="{{ route('banner.index') }}">返回</a>
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
                                        请仔细填写带有红色提示的必填项！<br>
                                        图片大小：宽度 750 <br>
                                        建议图片宽高比：750 : 1334
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
