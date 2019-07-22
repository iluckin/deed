@extends('layouts.app')
@section('title') 产权管理 @endsection
@section('main')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-header bg-none border-0">
                    <span class="display-5 text-primary">产权管理</span>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="font-weight-bold text-primary">
                                <i class="fa fa-bookmark"></i> 编辑产权信息
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
                                                    <span class="text-dark">编辑添加</span>
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
                                                                        <div class="form-group">
                                                                            <label>小区 <small class="text-danger">* 必填</small></label>
                                                                            <select name="community_id" class="form-control select2-single" id="">
                                                                                <option value="0">请选择小区</option>
                                                                                @foreach($communities as $com)
                                                                                    <option value="{{ $com->id }}">{{ $com->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>期号 <small class="text-danger"></small></label>
                                                                        <select name="batch" class="form-control select2-single" id="">
                                                                            @foreach([1, 2, 3, 4, 5] as $i)
                                                                                <option @if(request('batch', 1) == $i) selected @endif value="{{ $i}}">{{ $i }}期</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>楼栋 <small class="text-danger">* 必填</small></label>
                                                                            <input class="form-control" type="text" name="floor" placeholder="楼栋" value="{{ old('floor') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>单元 <small class="text-danger">* 必填</small></label>
                                                                            <input class="form-control" type="text" name="unit" placeholder="单元" value="{{ old('unit') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>房间 <small class="text-danger">* 必填</small></label>
                                                                            <input class="form-control" type="text" name="room" placeholder="房间" value="{{ old('room') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>客户姓名 <small class="text-danger">* 必填</small></label>
                                                                            <input class="form-control" type="text" name="client_name" placeholder="客户姓名" value="{{ old('client_name') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>客户电话 <small class="text-danger">* 必填</small></label>
                                                                            <input class="form-control" type="text" name="mobile" placeholder="客户电话" value="{{ old('mobile') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>实测面积 <small class="text-danger"></small></label>
                                                                            <input class="form-control" type="number" name="acreage" placeholder="实测面积" value="{{ old('acreage') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>实际房款 <small class="text-danger"></small></label>
                                                                            <input class="form-control" type="number" name="actual_price" placeholder="实际房款" value="{{ old('actual_price') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>产权人 <small class="text-danger"></small></label>
                                                                            <input class="form-control" type="text" name="owner_name" placeholder="产权人" value="{{ old('owner_name') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>身份证 <small class="text-danger"></small></label>
                                                                            <input class="form-control" type="text" name="identity_no" placeholder="身份证" value="{{ old('identity_no') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>合同号 <small class="text-danger"></small></label>
                                                                            <input class="form-control" type="text" name="contract_no" placeholder="合同号" value="{{ old('contract_no') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>签约单价 <small class="text-danger"></small></label>
                                                                            <input class="form-control" type="number" name="contract_price" placeholder="签约单价" value="{{ old('contract_price') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>签约日期 <small class="text-danger"></small></label>
                                                                            <input class="form-control" type="date" name="contract_date" placeholder="签约日期" value="{{ old('contract_date') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>交件日期 <small class="text-danger"></small></label>
                                                                            <input class="form-control" type="date" name="deliver_date" placeholder="交件日期" value="{{ old('deliver_date') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>更名 <small class="text-danger"></small></label>
                                                                            <input class="form-control" type="text" name="change_owner" placeholder="更名" value="{{ old('change_owner') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label>纠纷 <small class="text-danger"></small></label>
                                                                            <input class="form-control" type="text" name="dispute" placeholder="纠纷" value="{{ old('dispute') }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>详细地址</label>
                                                                        <input class="form-control" type="text" name="address" placeholder="详细地址" value="{{ old('address') }}" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>备注</label>
                                                                        <textarea class="form-control" name="remark" id="" cols="30" placeholder="备注..."
                                                                                  rows="5">{{ old('remark') }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @include('components.validate-message')
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-start">
                                                            <button class="btn btn-primary mr-2" type="submit">保存</button>
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
