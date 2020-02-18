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
                        </div>
                    <h3>{{ __('SMS Verification') }}</h3>
                    <p><strong>{{$checkRememberToken->first_name}} {{$checkRememberToken->last_name}}</strong> Thank You for your registration:</p>
                    <form action="{{ route('sms.verification.submit') }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label class="control-label" for="input-email">{{ __('Enter Your Verification Code.') }}</label>
                                    <input type="hidden" class="form-control" name="verify_token" value="{{$checkRememberToken->remember_token}}">
                                    <input type="text" class="form-control" name="verify_code" placeholder="Enter Your Verification Code..">
                                <span class="error_text"> {{ $errors->first('email') }} </span>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection