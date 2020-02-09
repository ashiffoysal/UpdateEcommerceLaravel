@extends('layouts.websiteapp')
@section('main_content')
<div class="container account-login">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Account</a></li>
            <li><a href="#">Login</a></li>
        </ul>

        <div id="content" class="col-md-9">
            <div class="session-message">
                @if (Session::has('successMsg'))
                    <span class="alert alert-success d-block">{{ session('successMsg') }}</span>
                @endif
                @if (Session::has('errorMsg'))
                    <span class="alert alert-danger d-block">{{ session('errorMsg') }}</span>
                @endif
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="well ">
                        <h2>New Customer</h2>
                        <p><strong>Register Account</strong></p>
                        <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                        <a href="{{route('register')}}" class="btn btn-primary">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="well col-sm-12">

                        <h2>Returning Customer</h2>
                        <p><strong>I am a returning customer</strong></p>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label class="control-label" for="input-email">E-Mail Address</label>
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" id="input-email" class="form-control">
                                <span class="error_text"> {{ $errors->first('email') }} </span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-password">Password</label>
                                <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                                <span class="error_text"> {{ $errors->first('password') }} </span><br/>
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
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="module">
                <h3 class="modtitle"><span>My Wish List </span></h3>
                <div class="module-content custom-border">
                    <ul class="list-box">

                        <li><a href="#">My Account </a></li>

                        <li><a href="#">Edit Account </a></li>
                        <li><a href="#">Password </a></li>

                        <li><a href="#">Address Book </a></li>
                        <li><a href="wishlist.html">Wish List </a></li>
                        <li><a href="#">Order History </a></li>
                        <li><a href="#">Downloads </a></li>
                        <li><a href="#">Recurring payments </a></li>
                        <li><a href="#">Reward Points </a></li>
                        <li><a href="#">Returns </a></li>
                        <li><a href="#">Transactions </a></li>
                        <li><a href="#">Newsletter </a></li>

                        <li><a href="#">Logout </a></li>

                    </ul>
                </div>
            </div>
        </aside>
    </div>

</div>
@endsection
