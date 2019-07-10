@extends('auth.master')
@section('title') 登陆 @endsection
@section('main')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 auth-container">
                <div class="e-panel card">
                    <div class="card-body py-4">
                        <div class="card-title">
                            <div class="h6 text-center w-100 mb-2 text-primary">登陆</div>
                        </div>
                        <form action="{{ route('login') }}" method="post">
                            @if($errors->all())
                                <div class="alert alert-warning" role="alert">
                                    <i class="fa fa-warning"></i> {{ $errors->first() ?: '登陆失败' }}
                                </div>
                            @endif
                            @csrf
                            <input type="hidden" name="tencent-captcha-ticket" value="">
                            <div class="form-group">
                                <input placeholder="账号" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <input placeholder="••••••" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            </div>
                            {{--<div class="form-group d-flex justify-content-between align-items-center">--}}
                                {{--<button class="btn btn-outline-primary w-100" type="button" id="TencentCaptcha" data-appid="2018730809" data-cbfn="TencentCaptchaCallBack">--}}
                                    {{--<i class="fa fa-dot-circle-o mr-2"></i>--}}
                                    {{--{{ $errors->has('tencent-captcha-ticket') ? '验证失败，请重新点击认证' : '点击验证' }}--}}
                                {{--</button>--}}
                            {{--</div>--}}

                            <div class="form-group d-flex justify-content-between align-items-center">
                                <div class="mr-5">
                                    <input class="switchery-checkbox" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>  记住我
                                </div>
                                @if (Route::has('password.request'))
                                    <div class="pull-right text-right pr-2">
                                        {{--<a class="text-dark" href="{{ route('password.request') }}">忘记密码?</a>--}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary auth-btn w-100">登 陆</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
