@extends('layouts.websiteapp')
@section('main_content')
<!-- Main Container  -->
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
<div class="search-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-content">
                    <div class="row" id="search_result_product">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main_content">
    <div class="breadcrumbs">
        <div class="container">
            <div class="title-breadcrumb">
                Track Your Product
            </div>
            <ul class="breadcrumb-cate">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="contact.html">Tracking</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="info-contact row">
                  <div class="col-md-3"></div>
                    <div class="col-sm-6 col-xs-12 contact-form">
                        <form action="{{ url('tracking/order') }}" method="GET">
                            @csrf
                            <fieldset>

                                <p>Track Your Product Using Your Order ID !</p>
                                <div class="form-group required">
                                    <div class="col-sm-12">
                                        <input type="text"  name="order_id" class="form-control" placeholder="Order ID" required/>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group required">
                                <div class="col-sm-12 text-center">
                                    <button class="btn btn-info" type="submit"><span> Track Order </span></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- //Main Container -->
<!-- //Main Container -->

@endsection
@push('js')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#contract_form').on('submit', function (e) {
            e.preventDefault();
            var type = $(this).attr('method')
            var url = $(this).attr('action');
            var data = $(this).serialize();
            var visitor_name = $('#visitor_name').val();
            var visitor_email = $('#visitor_email').val();
            var visitor_message = $('#visitor_message').val();
            // console.log(data);

            $.ajax({
                url: url,
                type: type,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                // dataType:'json',
                success: function (data) {
                    //console.log(data);

                    if (data.success) {

                        //console.log(data.success);
                        var visitor_name = $('#visitor_name').val('');
                        var visitor_email = $('#visitor_email').val('');
                        var visitor_message = $('#visitor_message').val('');
                        var visitor_image = $('#visitor_image').val('');
                        var visitor_subject = $('#visitor_subject').val('');
                        var phone = $('#phone').val('');
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": true,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "100",
                            "hideDuration": "5000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        Command: toastr["success"](data.success)

                    } else {

                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": true,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "100",
                            "hideDuration": "5000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        Command: toastr["error"]('Something went wrong.')
                    }
                }
            });
        })
    })
</script>
@endpush
