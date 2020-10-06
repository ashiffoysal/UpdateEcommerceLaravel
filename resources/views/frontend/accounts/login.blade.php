@extends('layouts.websiteapp')
@section('content')
<div class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>My account</li>
                </ul>
            </div>
        </div>
        <div class="ps-my-account">
            <div class="container">
            @if(Session::has('errorMsg'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('errorMsg') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form class="ps-form--account ps-tab-root" action="{{route('customar.login')}}" method="post">
                        @csrf
                    <ul class="ps-tab-list">
                        <li class="active"><a href="#sign-in">Login</a></li>
                        <li><a href="#register">Register</a></li>
                    </ul>
                    <div class="ps-tabs">
                        <div class="ps-tab active" id="sign-in">
                        <div class="ps-form__content">
                                    <h5>Log In Your Account</h5>
                   
                                    <div class="form-group">
                                        <input class="form-control" name="login_email" type="text" placeholder="Phone or email address">
                                        @error('login_email')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    

                                    <div class="form-group form-forgot">
                                        <input class="form-control" name="login_password" type="password" placeholder="Password"><a href="{{route('customar.email.forget.password')}}">Forgot?</a>
                                        @error('login_password')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                  

                                    <div class="form-group">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="remember-me" name="remember-me">
                                            <label for="remember-me">Rememeber me</label>
                                        </div>
                                    </div>
                                    <div class="form-group submit">
                                        <button type="submit" class="ps-btn ps-btn--fullwidth">Login</button>
                                    </div>
                                </div>
                            <div class="ps-form__footer">
                               <!--  <p>Connect with:</p>
                                <ul class="ps-list--social">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
</form>
                        <div class="ps-tab" id="register">
                            <div class="ps-form__content">
                                <h5>Register An Account</h5>
                                <form action="{{route('customar.register')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input class="form-control" name="phone_email" type="text" placeholder="Phone or email address">
                                        @error('phone_email')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    

                                    <div class="form-group">
                                        <input class="form-control" name="password" type="password" placeholder="Password">
                                        @error('password')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    
                                    

                                    <div class="form-group">
                                        <input class="form-control" name="password_confirmation" type="password" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group submtit">
                                        <button type="submit" class="ps-btn ps-btn--fullwidth">Register</button>
                                    </div>
                                </form>
                            </div>
                            <div class="ps-form__footer">
                                <p>Connect with:</p>
                                <ul class="ps-list--social">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
    
    @include('frontend.include.newsletter._subcribtion')
@endsection