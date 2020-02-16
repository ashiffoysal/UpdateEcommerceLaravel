@php
$seo=DB::table('seo')->first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ $seo->meta_title }}</title>
	<meta charset="utf-8">
	<meta name="keywords" content="{{$seo->meta_key}}" />
  <meta name="description" content="{{$seo->meta_description}}" />
	<meta name="author" content="{{$seo->meta_author}}">
	<meta name="robots" content="index, follow"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- {{$seo->google_verification}}
	{{$seo->bing_verification}} -->
	@yield('meta')
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png"/>
	<!-- Include all css for home page ============================================ -->
		@foreach(App\ThemeSelector::where('status',1)->get() as $css)
			@include($css->css_name)
		@endforeach
  {{$seo->google_analytic}}
  {{$seo->alexa_analytic}}
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
            @if(Session::has('messege'))
            var type="{{Session::get('alert-type','info')}}"
            switch(type){
                    case 'info':
                           toastr.info("{{ Session::get('messege') }}");
                    break;
                    case 'success':
                           toastr.success("{{ Session::get('messege') }}");
                    break;
                    case 'warning':
                            toastr.warning("{{ Session::get('messege') }}");
                    break;
                    case 'error':
                            toastr.error("{{ Session::get('messege') }}");
                    break;
            }
        @endif


        @if(Session::has('alertmessege'))
            toastr.warning("{{ Session::get('alertmessege') }}");
        @endif
</script>
















<script>
    $(document).ready(function() {
        $('#user_country').click(function(params) {
            var country_id = $(this).val();
            console.log(country_id);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ url('/user/division/name') }}/" +country_id,
				dataType:"json",

                success: function(data) {


                        $('#user_division').empty();
                        $('#user_division').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data,function(index,divisionobj){
                         $('#user_division').append('<option value="' + divisionobj.id + '">'+divisionobj.name+'</option>');
                       });
                }

            });



            });
    });
</script>

<script>
    $(document).ready(function() {
        $('#user_division').click(function(params) {

            var division_id = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ url('/user/district/name') }}/" +division_id,
				dataType:"json",

                success: function(data) {

						console.log(data);
                        $('#user_district').empty();
                        $('#user_district').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data,function(index,districtbj){
                         $('#user_district').append('<option value="' + districtbj.id + '">'+districtbj.name+'</option>');
                       });
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#user_district').click(function(params) {

            var upazila_id = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ url('/user/upazila/name') }}/" +upazila_id,
				dataType:"json",

                success: function(data) {

						console.log(data);
                        $('#user_upazila').empty();
                        $('#user_upazila').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data,function(index,upazilabj){
                         $('#user_upazila').append('<option value="' + upazilabj.id + '">'+upazilabj.name+'</option>');
                       });
                }
            });
        });
    });
</script>



</body>

</html>
