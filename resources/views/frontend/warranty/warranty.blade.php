@extends('layouts.websiteapp')
@section('main_content')
<!-- //Header Container  -->
<div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog block-popup-login">
        <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle"
            data-dismiss="modal"></a>
        <div class="tt_popup_login"><strong>Sign in Or Register</strong></div>
        <div class="block-content">
            <div class=" col-reg registered-account">
                <div class="block-content">
                    <form class="form form-login" action="#" method="post" id="login-form">
                        <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                            <div class="field email required email-input">
                                <div class="control">
                                    <input name="email" value="" autocomplete="off" id="email" type="email"
                                        class="input-text" title="Email" placeholder="E-Mail Address">
                                </div>
                            </div>
                            <div class="field password required pass-input">
                                <div class="control">
                                    <input name="password" type="password" autocomplete="off" class="input-text"
                                        id="pass" title="Password" placeholder="Password">
                                </div>
                            </div>

                            <div class=" form-group">
                                <label class="control-label">Login with your social account</label>
                                <div>

                                    <a href="#" class="btn btn-social-icon btn-sm btn-google-plus"><i
                                            class="fa fa-google fa-fw" aria-hidden="true"></i></a>

                                    <a href="#" class="btn btn-social-icon btn-sm btn-facebook"><i
                                            class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>

                                    <a href="#" class="btn btn-social-icon btn-sm btn-twitter"><i
                                            class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>

                                    <a href="#" class="btn btn-social-icon btn-sm btn-linkdin"><i
                                            class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>

                                </div>
                            </div>

                            <div class="secondary ft-link-p"><a class="action remind" href="#"><span>Forgot Your
                                        Password?</span></a></div>
                            <div class="actions-toolbar">
                                <div class="primary">
                                    <button type="submit" class="action login primary" name="send"
                                        id="send2"><span>Login</span></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-reg login-customer">

                <h2>NEW HERE?</h2>
                <p class="note-reg">Registration is free and easy!</p>
                <ul class="list-log">
                    <li>Faster checkout</li>
                    <li>Save multiple shipping addresses</li>
                    <li>View and track orders and more</li>
                </ul>
                <a class="btn-reg-popup" title="Register" href="#">Create an account</a>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
</div>

<!-- Main Container  -->


    @php
    $image=App\SiteBanner::where('section',7)->where('is_deleted',0)->where('status',1)->orderBy('id','DESC')->first();
    @endphp
     <div class="search-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_section">
                        <h4 style="margin-top:20px;border-bottom: 2px solid gray;">Search result has been shown below <i style="color:#ff5e00; font-size:15px;" class="fa fa-long-arrow-down"></i></h4>
                    </div>
                    <div class="search-content">
                        <div class="row" id="search_result_product">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main_content">
    @if($image)
    <div class="breadcrumbs"
        style="background: url({{asset('public/uploads/sitebanner/'.$image->image)}}) no-repeat center top;">
        <div class="container">
            <div class="title-breadcrumb">

                Warranty And Services

            </div>
            <ul class="breadcrumb-cate">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="">Warranty And Services</a></li>
            </ul>
        </div>
    </div>
    @else
    <div class="breadcrumbs">
        <div class="container">
            <div class="title-breadcrumb">

                Warranty And Services

            </div>
            <ul class="breadcrumb-cate">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="">Warranty And Services</a></li>
            </ul>
        </div>
    </div>

    @endif

    <div class="container">
        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="page_warranity">
                    <div class="title-box">
                        <h1 class="text-left text-uppercase title-under">Warranty and services</h1>
                    </div>
                    @php
                    $allwarranty=App\Warranty::where('is_deleted',0)->where('status',1)->get();
                    @endphp
                    @foreach($allwarranty as $key => $data)
                    <h3 class="color title-decimal font30" data-content="{{++$key}}">{{$data->w_ques}}</h3>
                    <p>{{$data->w_ans}}</p>

                    <hr class="hr-lg">
                    @endforeach



                </div>
            </div>
        </div>
    </div>
</div>


<!-- //Main Container -->
@endsection
