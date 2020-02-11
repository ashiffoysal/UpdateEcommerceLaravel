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
                    <h2>{{ __('Forget Password Form') }}</h2>
                    <p><strong>{{ __('Please, Give Your E-mail Address Below') }}</strong></p>
                    <form action="{{ route('password.email') }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label class="control-label" for="input-email">{{ __('E-Mail Address') }}</label>
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" id="input-email" class="form-control">
                                <span class="error_text"> {{ $errors->first('email') }} </span>
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
