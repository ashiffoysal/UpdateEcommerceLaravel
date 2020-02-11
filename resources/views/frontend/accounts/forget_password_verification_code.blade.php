@extends('layouts.websiteapp')
@section('main_content')
<div class="container account-login">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Account</a></li>
            <li><a href="#">Login</a></li>
        </ul>
        <div  class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="forget_email_form">


                    <div class="well_for_forget_password col-md-5">
                        <div class="session-message">
                            @if (Session::has('errorMsg'))
                                <span class="alert alert-danger d-block">{{ session('errorMsg') }}</span>
                            @endif
                            @if (Session::has('successMsg'))
                                <span class="alert alert-success d-block">{{ session('successMsg') }}</span>
                            @endif
                        </div>
                    <h2>{{ __('Forget Password Form') }}</h2>
                    <p class="text-success">
                        <strong>{{ __('Check you mail and enter the verification code.') }}</strong>
                        <a
                            onclick="
                                event.preventDefault();
                                document.getElementById('resend_verification_code_form').submit();
                            "
                            class="btn btn-sm btn-success float-right" href="">
                            Resend Mail
                        </a>
                    </p>
                    <form action="{{ route('user.check.verification.code') }}" method="post">
                        @csrf
                            <input type="hidden" name="remember_token" value="{{ $remember_token }}">
                            <div class="form-group">
                                <label class="control-label" for="input-email">{{ __('Verification code') }}</label>
                                <input type="text" name="verification_code" value="{{ old('verification_code') }}" placeholder="E-Mail Address" id="input-email" class="form-control">
                                <span class="error_text"> {{ $errors->first('verification_code') }} </span>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary pull-left">
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form style="display:node" id="resend_verification_code_form" action="{{ route('resend.verification.code', $remember_token) }}" method="POST">
        @csrf
    </form>
</div>
@endsection
