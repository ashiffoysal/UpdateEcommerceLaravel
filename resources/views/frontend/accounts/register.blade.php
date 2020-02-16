@extends('layouts.websiteapp')
@section('main_content')
<!-- Main Container  -->

<div class="main-container container account res">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">Register</a></li>
    </ul>

    <div class="row">
        <div id="content" class="col-md-9">
            <h2 class="title">Register Account</h2>
            <p>If you already have an account with us, please login at the <a href="#">login page</a>.</p>
            @if (Session::has('successMsg'))
                <span class="alert alert-success d-block">{{ session('successMsg') }}</span>
            @endif
        <form action="{{ route('register') }}" method="post"  class="form-horizontal account-register clearfix">
            @csrf
                <fieldset id="account">

                    <legend>Your Personal Details</legend>

                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
                        <div class="col-sm-10">
                        <input type="text" name="firstname" value="{{ old('firstname') }}" placeholder="First Name" id="input-firstname" class="form-control">
                        <span class="error_text">{{ $errors->first('firstname') }}</span>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name" id="input-lastname" class="form-control">
                            <span class="error_text">{{ $errors->first('lastname') }}</span>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                        <div class="col-sm-10">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail" id="input-email" class="form-control">
                        <span class="error_text">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone">Phone</label>
                        <div class="col-sm-10">
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Telephone" id="input-telephone" class="form-control">
                        <span class="error_text">{{ $errors->first('phone') }}</span>
                    </div>
                    </div>

                </fieldset>
                <fieldset>
                    <legend>Your Password</legend>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-password">Password</label>
                        <div class="col-sm-10">
                        <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" id="input-password" class="form-control">
                            <span class="error_text">{{ $errors->first('password') }}</span>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
                        <div class="col-sm-10">
                            <input type="password" name="password_confirmation" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
                        </div>
                    </div>
                </fieldset>

                <div class="buttons">
                    <div class="pull-right">
                        {{-- I have read and agree to the <a href="#" class="agree"><b>Pricing Tables</b></a>
                        <input class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp; --}}
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>

        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="module">
                <h3 class="modtitle"><span>Register Account </span></h3>
                <div class="module-content custom-border">
                    <ul class="list-box">

                        <li><a href="{{url('login')}}">Login </a> / <a href="{{ route('register') }}">Register </a></li>

                    </ul>
                </div>
            </div>
        </aside>

    </div>
</div>
<!-- //Main Container -->
@endsection
