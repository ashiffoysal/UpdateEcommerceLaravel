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
                                <span class="alert alert-danger d-block">{{ session('successMsg') }}</span>
                            @endif
                        </div>
                    <h2>{{ __('Forget Password Form') }}</h2>
                    <p><strong>{{ __('Set Your New Password') }}</strong></p>
                    <form action="{{ route('forget.reset.password.submit') }}" method="post">
                        @csrf
                            <input type="hidden" name="remember_token" value="{{ $getUser->remember_token }}">
                            <div class="form-group">
                                <label class="control-label" for="input-email">{{ __('Password') }}</label>
                                <input type="password" name="password"  placeholder="Password" id="input-email" class="form-control">
                                <span class="error_text"> {{ $errors->first('password') }} </span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-email">{{ __('Confirm password') }}</label>
                                <input type="password" name="password_confirmation"  placeholder="Confirm password" id="input-email" class="form-control">
                                <span class="error_text"> {{ $errors->first('password_confirmation') }} </span>
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
@endsection
