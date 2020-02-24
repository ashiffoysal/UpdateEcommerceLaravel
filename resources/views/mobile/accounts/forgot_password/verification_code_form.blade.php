@extends('mobile.extra_master')
@section('page_content')
<!-- Begin Bar Nav -->
<header class="bar bar-nav ">
    <a class="btn btn-link btn-nav pull-left" href="{{ url('/') }}">
        <span class="icon icon-left-nav"></span>
    </a>
    <a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
        <span class="icon icon-bars"></span>
    </a>
    <h1 class="title">Forgot Password Verification Code</h1>
</header>
<!-- //End Bar Nav -->
<div class="content">
    <div class="container page-sitemap">
        <div class="row">
            <div id="content" class="col-xs-12">
                <div class="tab-account">
                    <div class="tab-content">
                        <div id="home" class="tab-pane form-login fade active in">

                            <div class="well col-sm-12">
                                <h5 class="text-success">We have send a verification code in your email address</h5>
                            <a style="margin-left:100px;" class="btn btn-sm btn-success text-center" href="{{ route('forgot.password.verify.code.resend', $remember_token) }}">Resend Verification Code</a>
                                @if (Session::has('errorMsg'))
                                <div style="margin-left:20px; margin-top:10px;" class="alert-danger text-center">{{ session('errorMsg') }}
                                </div>
                                @endif
                                @if (Session::has('successMsg'))
                                <div style="margin-left:20px; margin-top:10px;" class="alert-success text-center">{{ session('successMsg') }}
                                </div>
                                @endif
                                <form action="{{route('mobile.forget.password.check.verification')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="remember_token" value="{{ $remember_token }}">
                                    <div class="form-group form-user">
                                        <label class="control-label font-ct" for="input-email">Verification Code</label>
                                        <input type="text" name="verification_code" value="{{ old('verification_code') }}" placeholder="Verification code" id="input-email" class="form-control">
                                        <span class="text-danger text-center p-0 m-0 d-block">{{ $errors->first('verification_code') }}</span>
                                    </div>
                                    <input type="submit" value="Submit" class="btn btn-primary pull-left">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
