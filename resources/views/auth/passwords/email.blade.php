@extends('auth.master')

@section('title') 找回密码 @endsection

@section('main')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 auth-container">
                <div class="e-panel card">
                    <div class="card-body py-4">
                        <div class="card-title">
                            <div class="h6 text-center w-100 mb-2 text-primary">重置密码</div>
                        </div>
                        <form action="{{ route('password.email') }}" method="post">
                            @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                    <i class="fa fa-warning"></i> {{ session('status') }}
                                </div>
                            @endif
                            @if ($errors->has('email'))
                                <div class="alert alert-warning" role="alert">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            @csrf

                            <input type="hidden" name="tencent-captcha-ticket" value="">
                            <div class="form-group">
                                <input placeholder="邮箱" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="form-group d-flex justify-content-between align-items-center">
                                <button class="btn btn-outline-primary w-100" type="button" id="TencentCaptcha" data-appid="2018730809" data-cbfn="TencentCaptchaCallBack">
                                    <i class="fa fa-dot-circle-o text-primary"></i>
                                    {{ $errors->has('tencent-captcha-ticket') ? '验证失败，请重新点击认证' : '点击验证' }}
                                </button>
                            </div>

                            <div class="form-group d-flex justify-content-between align-items-center">
                                <button type="submit" disabled class="btn btn-primary auth-btn w-100">发送密码重置链接</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
