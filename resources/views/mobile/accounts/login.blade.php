@extends('mobile.extra_master')
@section('page_content')
<!-- Begin Bar Nav -->
<header class="bar bar-nav ">
    <a class="btn btn-link btn-nav pull-left" href="{{ URL::previous() }}">
        <span class="icon icon-left-nav"></span>
    </a>
    <a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
        <span class="icon icon-bars"></span>
    </a>
    <h1 class="title">Login/Register</h1>
</header>
<!-- //End Bar Nav -->
<div class="content">
    <div class="container page-sitemap">
        <div class="row">
            <div id="content" class="col-xs-12">
                <div class="tab-account">
                    <div class="icon-custom"></div>
                    <ul class="nav nav-tabs segmented-control">
                        <li class="active"><a class="platform-switch control-item active" data-toggle="tab" href="#home"
                                aria-expanded="true">Login</a> </li>
                        <li class=""><a class="platform-switch control-item active" data-toggle="tab" href="#menu1"
                                aria-expanded="false">Registed</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane form-login fade active in">
                            <div class="well col-sm-12">
                                <h2 class="hidden">Returning Customer</h2>
                                <p class="hidden"><strong>I am a returning customer</strong>
                                </p>
                                <form action="{{route('mobile.login')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group form-user">
                                        <label class="control-label font-ct" for="input-email">E-Mail Address</label>
                                        <input type="text" name="email" value="" placeholder="E-Mail Address"
                                            id="input-email" class="form-control">
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-pw">
                                        <label class="control-label font-ct" for="input-password">Password</label>
                                        <input type="password" name="password" value="" placeholder="Password"
                                            id="input-password" class="form-control">
                                        @error('password')
                                        <span class="text-danger">{{$message}}</span><br>
                                        @enderror
                                        <a href="{{ route('mobile.forgot.password.form') }}">Forgotten Password</a>
                                    </div>
                                    <input type="submit" value="Login" class="btn btn-primary pull-left">
                                </form>

                                <div class="social_login icons-social">
                                    <div class="list-inline">
                                        <a title="Facebook" href="{{ route('facebook.login') }}" target="_blank">
                                            <span class="fa fa-facebook icon-flat icon-color"></span>
                                        </a>
                                        <a title="Google+" href="{{ route('google.login') }}"
                                            target="_blank">
                                            <span class="fa fa-google-plus icon-flat icon-color"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade in">

                            <div id="content" class="col-xs-12">
                                <h2>Register Account</h2>

                                <form action="{{ route('mobile.register') }}" method="post"
                                    enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <fieldset id="account">

                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-firstname">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="username" value=""
                                                    placeholder="Enter Your Name" id="input-firstname"
                                                    class="form-control">
                                                <span class="error_text">{{ $errors->first('username') }}</span>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" value="" placeholder="E-Mail"
                                                    id="input-email" class="form-control">
                                                <span class="error_text">{{ $errors->first('email') }}</span>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label"
                                                for="input-telephone">Telephone</label>
                                            <div class="col-sm-10">
                                                <input type="tel" name="phone" value="" placeholder="Telephone"
                                                    id="input-telephone" class="form-control">
                                                <span class="error_text">{{ $errors->first('phone') }}</span>
                                            </div>
                                        </div>

                                    </fieldset>

                                    <fieldset>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-password">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" value="" placeholder="Password"
                                                    id="input-password" class="form-control">
                                                <span class="error_text">{{ $errors->first('password') }}</span>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-confirm">Password
                                                Confirm</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password_confirmation" value=""
                                                    placeholder="Password Confirm" id="input-confirm"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </fieldset>


                                    <div class="buttons">
                                        <div class="pull-right"><input type="checkbox" name="agree" value="1"> &nbsp;
                                            &nbsp;I have read and agree to the <a href="#" class="agree"><b>Terms And
                                                    Conditions</b></a>

                                            <input type="submit" value="Continue" class="btn btn-primary">
                                        </div>
                                    </div>
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
