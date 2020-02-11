@extends('layouts.websiteapp')
@section('main_content')
    <!-- //Header Container  -->
    <div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true" >
            <div class="modal-dialog block-popup-login">
                <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>
                <div class="tt_popup_login"><strong>Sign in Or Register</strong></div>
                <div class="block-content">
                    <div class=" col-reg registered-account">
                        <div class="block-content">
                            <form class="form form-login" action="#" method="post" id="login-form">
                                <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                                    <div class="field email required email-input">
                                        <div class="control">
                                            <input name="email" value="" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="E-Mail Address">
                                        </div>
                                    </div>
                                    <div class="field password required pass-input">
                                        <div class="control">
                                            <input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Password" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class=" form-group">
                                        <label class="control-label">Login with your social account</label>
                                        <div>

                                            <a href="#" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>

                                            <a href="#" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>

                                            <a href="#" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>

                                            <a href="#" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>

                                        </div>
                                    </div>

                                    <div class="secondary ft-link-p"><a class="action remind" href="#"><span>Forgot Your Password?</span></a></div>
                                    <div class="actions-toolbar">
                                        <div class="primary">
                                            <button type="submit" class="action login primary" name="send" id="send2"><span>Login</span></button>
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
    $image=App\SiteBanner::where('section',8)->where('is_deleted',0)->where('status',1)->orderBy('id','DESC')->first();
  @endphp
  @if($image)
  <div class="breadcrumbs" style="background: url({{asset('public/uploads/sitebanner/'.$image->image)}}) no-repeat center top;">
      <div class="container">
          <div class="title-breadcrumb">

              Support 24/7 page

          </div>
          <ul class="breadcrumb-cate">
              <li><a href="index.html"><i class="fa fa-home"></i></a></li>
              <li><a href="support.html">Support 24/7 page</a></li>
          </ul>
      </div>
  </div>
  @else
  <div class="breadcrumbs">
      <div class="container">
          <div class="title-breadcrumb">

              Support 24/7 page

          </div>
          <ul class="breadcrumb-cate">
              <li><a href="index.html"><i class="fa fa-home"></i></a></li>
              <li><a href="support.html">Support 24/7 page</a></li>
          </ul>
      </div>
  </div>
  @endif
  <div class="container">
      <div class="row">
          <div id="content" class="col-sm-12">
              <div class="page_support24">
                  <div class="title-box">
                      <h1 class="text-center text-uppercase title-under">HAVE A QUESTION?</h1>
                  </div>
                  <div class="row">
                      <div class="col-md-10 col-md-offset-1">
                          <p class="text-center">
                              Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                          </p>
                      </div>
                  </div>
                  <div class="divider divider--lg"></div>
                  <div class="row">
                      <div class="col-md-6">
                        @php
                          $new=App\Support::where('is_deleted',0)->where('status',1)->orderBy('id','DESC')->limit(2)->get();
                        @endphp
                        @foreach($new as $data)
                          <div class="media-box-link" onclick="location.href='#'">
                              <div class="media-box-link--figure text-center">
                                  <span class="icon icon-assignment {{$data->icon}}"></span>
                              </div>
                              <div class="media-box-link--content">
                                  <h4 class="font22">{{$data->heading_text}}</h4>
                                  <p>{{$data->details}}</p>
                              </div>
                              <div class="media-box-link--arrow">
                                <a href="{{route('frontend.contract.us.index')}}"><span class="icon icon-arrow_forward fa fa-arrow-right"></span></a>
                              </div>
                          </div>
                          <div class="divider divider--md1"></div>
                          @endforeach


                      </div>
                      <div class="col-md-6" onclick="location.href='#'">
                        @php
                          $new=App\Support::where('is_deleted',0)->where('status',1)->orderBy('id','DESC')->skip(2)->limit(2)->get();
                        @endphp
                          <div class="media-box-link">
                              <div class="media-box-link--figure text-center">
                                  <span class="icon icon-help {{$data->icon}}"></span>
                              </div>
                              <div class="media-box-link--content">
                                  <h4 class="font22">{{$data->heading_text}}</h4>
                                  <p>{{$data->details}}</p>
                              </div>
                              <div class="media-box-link--arrow">
                                <a href="{{route('frontend.contract.us.index')}}"><span class="icon icon-arrow_forward fa fa-arrow-right"></span></a>
                              </div>
                          </div>
                          <div class="divider divider--md1"></div>
                          <!--  -->


                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>


  <!-- //Main Container -->
@endsection
