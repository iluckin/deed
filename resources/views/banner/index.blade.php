@extends('layouts.app')
@section('title') 内容管理 @endsection
@section('main')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-header bg-none border-0">
                    <div class="row">
                        <div class="col-6 text-left">
                            <span class="display-5 text-primary">轮播图管理</span>
                        </div>
                        <div class="col-6 text-right">
                            <div class="btn-group">
                                <a href="{{ route('article.index') }}"  class="btn btn-sm btn-outline-light">文章管理</a>
                                <a class="btn btn-sm btn-outline-light btn-group-active">轮播图管理</a>
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
                                        <select class="form-control select2 select2-single" name="publish" id="">
                                            <option value="-1">发布状态</option>
                                            @foreach([0, 1] as $i)
                                                <option {{ $i == request('publish', '-1') ? 'selected' : '' }} value="{{ $i }}">{{ $i ? '是' : '否'  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group w-auto">
                                    <div class="input-group w-100">
                                        <input name="search" value="{{ request('search') }}" id="flatpickr-time" class="form-control flatpickr-input" placeholder="标题" type="text">
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
                            <a href="{{ route('banner.create') }}" class="d-inline-flex a-btn text-primary">
                                <i class="fa fa-plus mr-1"></i> 新增
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="font-weight-bold text-primary">
                                <i class="fa fa-list-ul"></i> 轮播图列表 ({{ $items->total() }})
                            </p>
                        </div>
                    </div>

                    {{--counter--}}
                    <div class="row">
                        @forelse($items ?? [] as $item)
                            <div class="col-3">
                                <div class="e-panel card mb-3 bordered-hover card-list-item">
                                    <div class="card-body pb-1">
                                        <div class="row">
                                            <div class="col-12 pull-right text-left">
                                                <div class="card-title">
                                                    <h6 class="mr-2">
                                                        <span class="text-dark">
                                                            <a href="{{ route('banner.edit', $item->id) }}" class="text-dark font-weight-bold">
                                                               {{ \Illuminate\Support\Str::limit($item->title, 20) }}
                                                            </a>
                                                        </span>
                                                    </h6>
                                                    <span class="pull-right classes-list-box-tools" style="height: 10px;">
                                                        <a href="{{ route('banner.edit', $item->id) }}"><i class="fa fa-fw fa-edit text-dark" title="编辑"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <img src="{{ asset($item->image) }}" onerror="this.src='{{ asset('images/banners/item-4.png') }}'" class="embed-responsive spinner-border" style="max-height: 90px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-none border-0">
                                        <div class="row">
                                            <div class="col text-left">
                                                <span class="badge badge-light text-primary">
                                                    <i class="fa fa-product-hunt "></i> {{ $item->published_at ? '已发布' : '未发布' }}
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
