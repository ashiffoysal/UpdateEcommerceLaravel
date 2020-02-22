@extends('layouts.websiteapp')
@section('main_content')
<div class="container account-login">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Account</a></li>
            <li><a href="#">Login</a></li>
        </ul>

        <div class="col-md-2"></div>
        <div id="content" class="col-md-8">
            <div class="session-message">
                @if (Session::has('successMsg'))
                    <span class="alert alert-success d-block">{{ session('successMsg') }}</span>
                @endif
                @if (Session::has('errorMsg'))
                    <span class="alert alert-danger d-block">{{ session('errorMsg') }}</span>
                @endif
            </div>
            <div class="row">
                <div class="well col-sm-6">
                    <h2 class="title"><i class="fa fa-user" aria-hidden="true"></i> Registration Account</h2>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                            <legend>Your Personal Details</legend>

                            <div class="form-group">
                                <label class="control-label" for="input-firstname">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" id="input-firstname" class="form-control">
                                <span class="error_text">{{ $errors->first('name') }}</span>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="input-email">E-Mail</label>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail" id="input-email" class="form-control w-75">
                                <span class="error_text">{{ $errors->first('email') }}</span>
                            </div>

                            <div class="form-group ">
                                <label class="control-label" for="input-telephone">Phone</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Telephone" id="input-telephone" class="form-control">
                                <span class="error_text">{{ $errors->first('phone') }}</span>
                            </div>

                            <div class="form-group ">
                                <label class="control-label" for="input-password">Password</label>
                                <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" id="input-password" class="form-control">
                                <span class="error_text">{{ $errors->first('password') }}</span>
                            </div>

                            <div class="form-group ">
                                <label class="control-label" for="input-confirm">Password Confirm</label>
                                <input type="password" name="password_confirmation" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
                            </div>

                        <div class="buttons">
                            <div class="pull-right">
                                {{-- I have read and agree to the <a href="#" class="agree"><b>Pricing Tables</b></a>
                                <input class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp; --}}
                                <button type="submit" name="auth_button" value="register_submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">

                    <div class="well col-sm-12">
                    <h2><i class="fa fa-user" aria-hidden="true"></i> Login your account</h2>
                    <form action="{{ route('checkout.login') }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label class="control-label" for="input-email">E-Mail Address</label>
                                <input type="text" name="login_email" value="{{ old('login_email') }}" placeholder="E-Mail Address" id="input-email" class="form-control">
                                <span class="error_text"> {{ $errors->first('login_email') }} </span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-password">Password</label>
                                <input type="password" name="login_password" value="" placeholder="Password" id="input-password" class="form-control">
                                <span class="error_text"> {{ $errors->first('login_password') }} </span><br/>
                                <a href="#">Forgotten Password</a></div>

                            <input type="submit" value="Login" class="btn btn-primary pull-left">
                        </form>
                        <column id="column-login" class="col-sm-8 pull-right">
                            <div class="row">
                                <div class="social_login pull-right" id="so_sociallogin">
                                    <a href="#" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>
                                    <a href="#" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>
                                    <a href="#" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>
                                    <a href="#" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </column>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
