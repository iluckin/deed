@extends('layouts.app')
@section('title') 产权办理 @endsection
@section('main')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-header bg-none border-0">
                    <div class="row">
                        <div class="col-6 text-left">
                            <span class="display-5 text-primary">住宅产权信息管理</span>
                        </div>
                        <div class="col-6 text-right">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-light btn-group-active">住宅产权</a>
                                <a href="{{ route('batch.index') }}"  class="btn btn-sm btn-outline-light">车位产权</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex mb-3 tools-bar">
                        <div class="mr-3" style="flex-grow: 1">
                            <form class="form-inline">
                                <div class="form-group w-25 mr-2">
                                    <div class="input-group w-100">
                                        <select class="form-control select2 select2-single" name="community_id" id="">
                                            <option value="-1">选择小区</option>
                                            @foreach(\App\Services\CommunityService::selectItems() as $item)
                                                <option {{ $item->id == request('community_id', '-1') ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group w-25 mr-2">
                                    <div class="input-group w-100">
                                        <select class="form-control select2-single" name="status" id="">
                                            <option value="-1">状态</option>
                                            @foreach(\App\Models\Deed::status() as $id => $name)
                                                <option {{ $id == request('status', '-1') ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group w-auto">
                                    <div class="input-group w-100">
                                        <input name="search" value="{{ request('search') }}" id="flatpickr-time" class="form-control flatpickr-input" placeholder="客户姓名或手机号码" type="text">
                                        <div class="input-group-append">
                                            <button class="btn btn-default shadow-none search-input-btn" type="submit">
                                                <i class="fa fa-search"></i> 搜索
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="text-right pt-1" style="flex-grow: 1">
                            <a href="{{ route('deed.import') }}" class="d-inline-flex a-btn text-primary">
                                <i class="fa fa-plus mr-1"></i> 住宅产权导入
                            </a> &nbsp;&nbsp;&nbsp;
                            <a href="{{ route('deed.create') }}" class="d-inline-flex a-btn text-primary">
                                <i class="fa fa-plus mr-1"></i> 住宅产权新增
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="font-weight-bold text-primary">
                                <i class="fa fa-list-ul"></i> 住宅产权信息列表 ({{ $items->total() }})
                            </p>
                        </div>
                    </div>

                    {{--counter--}}
                    <div class="row">
                        @forelse($items ?? [] as $item)
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="e-panel card mb-3 bordered-hover card-list-item">
                                    <div class="card-body pb-1">
                                        <div class="row">
                                            <div class="col-12 pull-right text-left">
                                                <div class="card-title">
                                                    <h6 class="mr-2">
                                                        <span class="text-dark">
                                                            <a href="{{ route('deed.edit', $item->id) }}" class="text-dark font-weight-bold">
                                                                # {{ implode('-', [$item->floor, $item->unit, $item->room]) }}
                                                            </a>
                                                        </span>
                                                        <br>
                                                        <br>
                                                        <small class="mt-2">
                                                            小区: {{ $item->community->name ?? '--' }} <br>
                                                            客户: {{ $item->client_name }} <br>
                                                            电话: {{ $item->mobile }}
                                                        </small>
                                                    </h6>
                                                    <span class="pull-right classes-list-box-tools" style="height: 10px;">
                                                        <a href="{{ route('deed.edit', $item->id) }}"><i class="fa fa-fw fa-edit text-dark" title="编辑"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-none border-0">
                                        <div class="row">
                                            <div class="col text-left">
                                                <span class="badge badge-light text-primary">
                                                    <i class="fa fa-product-hunt "></i> {{ \App\Models\Deed::status()[$item->status] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            @include('components.no-result')
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-12 pull-right">
                            <div class="mt-2">
                                {{ $items->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
