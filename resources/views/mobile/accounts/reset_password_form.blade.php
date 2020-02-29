@extends('mobile.extra_master')
@section('page_content')
<!-- Begin Bar Nav -->
<header class="bar bar-nav ">
    <a class="btn btn-link btn-nav pull-left" href="{{ route('mobile.myaccount') }}">
        <span class="icon icon-left-nav"></span>
    </a>
    <a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
        <span class="icon icon-bars"></span>
    </a>
    <h1 class="title">Reset Password</h1>
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
                                aria-expanded="true">Reset password</a> </li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane form-login fade active in">

                            <div class="well col-sm-12">
                                @if (Session::has('errorMsg'))
                                    <p style="margin-buttom:10px;font-size: 13px;" class="alert alert-danger">{{ session('errorMsg') }}</p>
                                @endif

                                <form action="{{route('reset.password')}}" method="post" >
                                    @csrf
                                    <div class="form-group form-user">
                                        <label class="control-label font-ct" for="input-email">Old Password</label>
                                        <input type="text" name="old_password" value="" placeholder="Old password"
                                            id="input-email" class="form-control">
                                        @error('old_password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-pw">
                                        <label class="control-label font-ct" for="input-password">New Password</label>
                                        <input type="password" name="password" value="" placeholder="Password"
                                            id="input-password" class="form-control">
                                        @error('password')
                                        <span class="text-danger">{{$message}}</span><br>
                                        @enderror

                                    </div>

                                    <div class="form-group form-pw">
                                        <label class="control-label font-ct" for="input-password">Confirm Password</label>
                                        <input type="password" name="password_confirmation" value="" placeholder="Confirm Password"
                                            id="input-password" class="form-control">
                                    </div>

                                    <input type="submit" value="Reset password" class="btn btn-primary pull-left">

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
