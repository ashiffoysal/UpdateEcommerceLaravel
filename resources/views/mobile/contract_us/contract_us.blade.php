@extends('mobile.master')
@push('css')
<link rel="stylesheet" href="{{asset('public/frontend/css/toaster_alert.css')}}">
@endpush
@section('main_content')
<div class="search_content_section">
    <div class="search_result">
        <div  class="heading_section">
            <h6 style="margin-top:40px; margin-left:10px;">Search Result has been shown here <i style="color:#ff5561" class="fa fa-long-arrow-down"></i></h6>
        </div>
        <div class="products-list row nopadding-xs grid so-filter-gird" id="search_result_product">


        </div>
    </div>
</div>
<div class="main_content">
<!-- //Begin Main Content -->
<div class="container page-sitemap">
    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="info-contact row">
                <div class="col-sm-6 col-xs-12 info-store">
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf-EZpcLV72omKDDxOlhG6-i8Ga8NenRo"></script>
                    <script>
                        function initialize() {
                            var myLatlng = new google.maps.LatLng(40.705423, -74.008616);
                            var mapOptions = {
                                zoom: 16,
                                zoomControl: false,
                                scaleControl: false,
                                scrollwheel: false,
                                disableDoubleClickZoom: true,
                                center: myLatlng
                            }
                            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                            var marker = new google.maps.Marker({
                                position: myLatlng,
                                map: map,
                                title: 'Furnicom!'
                            });
                        }
                        google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                    <div id="map-canvas"></div>
                </div>
                <div class="col-sm-6 col-xs-12 contact-form">

                <form id="contract_form" action="{{ route('mobile.contract.us.send') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <fieldset>
                            <legend>
                                <h2>Contact Form</h2>
                            </legend>
                            <p>
                               If you have any query. Please, contract with us.
                            </p>
                            {{-- <ul class="location-address">
                                <li><strong>address</strong>My Company, 42 avenue des Champs Elysées 75000 Paris France
                                    <br>
                                </li>
                            </ul> --}}
                            <div class="form-group required  form-name">
                                <div class="">
                                    <input type="text" required name="visitor_name" value="" id="visitor_name" class="form-control" placeholder="Your Name*">
                                </div>
                            </div>
                            <div class="form-group required form-mail">
                                <div class="">
                                    <input type="text" required name="visitor_email"  value="" id="visitor_email" class="form-control" placeholder="E-Mail Address*">
                                </div>
                            </div>

                            <div class="form-group required form-mail form-phone">
                                <div class="">
                                    <input type="text" required name="phone" id="phone" value="" class="form-control" placeholder="Phone number*">
                                </div>
                            </div>
                            <div class="form-group required form-mail form-subject">
                                <div class="">
                                    <input type="text" required name="visitor_subject" id="visitor_subject" value="" class="form-control" placeholder="Subject*">
                                </div>
                            </div>

                            <div class="form-group form-mail required">
                                <div class="col-sm-12">
                                    <textarea name="visitor_message" required rows="10" id="visitor_message" placeholder="Your enquiry*" class="form-control"></textarea>
                                </div>
                            </div>
                            <fieldset>
                                <legend class="hidden">Attach File (Optional)</legend>
                                <div class="form-group required">
                                    <div class="col-sm-12">
                                        <input type="file" name="visitor_image[]" multiple accept="image/*"
                                        id="visitor_image" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                        </fieldset>
                        <div class="buttons" style="margin-bottom: 2em;">
                            <div class="">
                                <button class="btn btn-sn" type="submit"><span>Submit</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- //End Main Content -->
@endsection
@push('js')
<script type="text/javascript" src="{{asset('public/frontend/js/toaster_alert.js')}}"></script>
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
