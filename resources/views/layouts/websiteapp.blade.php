@php
$seo=DB::table('seo')->first();
@endphp
@php
  $fav=App\Logo::where('id',1)->first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>

        <title>@yield('title', $seo->meta_title)</title>
    

    <meta charset="utf-8">
    <meta name="keywords" content="{{$seo->meta_key}}" />
    <meta name="description" content="{{$seo->meta_description}}" />
    <meta name="author" content="{{$seo->meta_author}}">
    <meta name="robots" content="index, follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- {{$seo->google_verification}}
	{{$seo->bing_verification}} -->
    @yield('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="{{asset('/'.$fav->favicon)}}" />
    <!-- Include all css for home page ============================================ -->
    @foreach(App\ThemeSelector::where('status',1)->get() as $css)
    @include($css->css_name)
    @endforeach
    {{$seo->google_analytic}}
    {{$seo->alexa_analytic}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body class="common-home res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">

        <!-- Include all header file for home page one ============================================ -->

        @foreach(App\ThemeSelector::where('status',1)->get() as $header)
        @include($header->header_name)
        @endforeach

        <!-- Include all header login option for home page one ============================================ -->
        @include('frontend.include.login.home1')

        <!-- Include navigation option for home page ============================================ -->

        @if(App\ThemeSelector::where('status',1)->first()->header_name !='frontend.include.header.home2')
        @include('frontend.include.navigation.home1')
        @else
        ''
        @endif

        <!-- main content start from here ============================================ -->

        @yield('main_content')


    </div>

    <!-- Include footer option for home page one ============================================ -->

    @foreach(App\ThemeSelector::where('status',1)->get() as $footer)
    @include($footer->footer_name)
    @endforeach

    </div>
    <div class="back-to-top"><i class="fa fa-angle-up"></i></div>

    <!-- Include all js for home page one ============================================ -->

    @foreach(App\ThemeSelector::where('status',1)->get() as $js)
    @include($js->js_name)
    @endforeach

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session:: has('alertmessege'))
        toastr.warning("{{ Session::get('alertmessege') }}");
        @endif
        @if (Session:: has('warning'))
        toastr.warning("{{ Session::get('messege') }}");
        @endif
        @if (Session:: has('success'))
        toastr.warning("{{ Session::get('messege') }}");
        @endif
        @if (Session:: has('error'))
        toastr.warning("{{ Session::get('messege') }}");
        @endif
    </script>

    <script>
        $(document).ready(function () {
            $('#user_country').click(function (params) {
                var country_id = $(this).val();
                console.log(country_id);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'GET',
                    url: "{{ url('/user/division/name') }}/" + country_id,
                    dataType: "json",
                    success: function (data) {
                        $('#user_division').empty();
                        $('#user_division').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data, function (index, divisionobj) {
                            $('#user_division').append('<option value="' + divisionobj.id + '">' + divisionobj.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#user_division').click(function (params) {

                var division_id = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'GET',
                    url: "{{ url('/user/district/name') }}/" + division_id,
                    dataType: "json",

                    success: function (data) {
                        console.log(data);
                        $('#user_district').empty();
                        $('#user_district').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data, function (index, districtbj) {
                            $('#user_district').append('<option value="' + districtbj.id + '">' + districtbj.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#user_district').click(function () {

                var upazila_id = $(this).val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'GET',
                    url: "{{ url('/user/upazila/name') }}/" + upazila_id,
                    dataType: "json",

                    success: function (data) {

                        console.log(data);
                        $('#user_upazila').empty();
                        $('#user_upazila').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data, function (index, upazilabj) {
                            $('#user_upazila').append('<option value="' + upazilabj.id + '">' + upazilabj.name + '</option>');
                        });
                    }
                });
            });
        });
</script>

<script>
    window.onmouseover = function(){

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ url('/show/total/price') }}",

                success: function(data) {
                    var totalPrice = data.total;
                    var totalPrice = totalPrice.toFixed(2);
                    document.getElementById('cartdatacount').innerHTML = data.quantity;
                    document.getElementById('product_price').innerHTML = totalPrice;

                }
            });
    }
</script>
<script>
    $(document).ready(function() {
        $('.compareproduct').on('click', function() {
            var com_id = $(this).val();
            //alert(com_id);
            $.ajax({
                type: 'GET',
                url: "{{ url('/product/compare') }}/" + com_id,
                processData: false,
                success: function(data) {
                    if (data.checkip) {
                        toastr.error("Already This Product Add Compare");
                    } else {
                        toastr.success("product add to compare");

                    }
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.mywishlist').on('click', function() {
            var id = $(this).data('id');
            //alert(id);
            if (id) {
                $.ajax({
                    url: "{{ url('/product/add/wishlist/') }}/" + id,
                    type: "GET",
                    dataType: "json",
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        if (data.check) {
                            toastr.error("Already This Product Add wishlist");
                        } else {
                            toastr.success("Product Add To wishlist");
                        }
                    }
                });
            } else {
                alert('danger');
            }
        });
    });
</script>

</body>

</html>
