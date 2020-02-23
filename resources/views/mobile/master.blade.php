<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic page needs
	============================================ -->
	<title>SuperMaket - Multipurpose Responsive HTML5 Template</title>
	<meta charset="utf-8">
	<meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
	<meta name="description" content="SuperMaket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
	<meta name="author" content="Magentech">
	<meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon
	============================================ -->

	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png" />

	<!-- Google web fonts
	============================================ -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" href="{{asset('public/mobile/css/bootstrap/css/bootstrap.css')}}">
	<link href="{{asset('public/mobile/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<link href="{{asset('public/mobile/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{asset('public/mobile/js/ratchet/ratchet.css')}}" rel="stylesheet">

	<!-- Theme CSS
	============================================ -->
	<link href="{{asset('public/mobile/css/mobile.css')}}" rel="stylesheet">

	<link href="{{asset('public/mobile/js/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('public/mobile/css/themecss/lib.css')}}" rel="stylesheet">
</head>

<body class="mobile-home ltr mobilelayout-1">
	<!-- Begin Main wrapper -->
	<div id="wrapper">

		@include('mobile.include.header')

		<div class="content">
			<!-- //Begin Main Content -->
			<div class="container page-builder-ltr">
				<div class="row">
					<div id="content">

						@include('mobile.include.menu')

						@yield('main_content')

					</div>

				</div>
			</div>
			<!-- //End Main Content -->

			<div class="col-xs-12" style="position: fixed; bottom:5%;left:0;right:0; background:white;padding:5px 0px;">
				<div class="block-mobile clearfix">
					<div class="info info1">
						<div class="inner">
							<i class="fa fa-truck"></i>
							<div class="info-content">
								<span>free delivery</span>
								<p>From 275 AED</p>
							</div>
						</div>
					</div>
					<div class="info info2">
						<div class="inner">
							<i class="fa fa-money"></i>
							<div class="info-content">
								<span>free delivery</span>
								<p>From 275 AED</p>
							</div>
						</div>
					</div>
					<div class="info info3">
						<div class="inner">
							<i class="fa fa-gift"></i>
							<div class="info-content">
								<span>free gift box</span>
								<p>&amp; gift note</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div id="panel-menu" class="side-menu panel panel-left">
		<div class="content">
			@include('mobile.include.sidemenu')
		</div>
	</div>

	<!-- Include Libs & Plugins
============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="{{asset('public/mobile/js/jquery-2.2.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/mobile/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/mobile/js/owl-carousel/owl.carousel.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/mobile/js/ratchet/ratchet.js')}}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<!-- Theme files
============================================ -->
	<script type="text/javascript" src="{{asset('public/mobile/js/mobile.js')}}"></script>
	@if(session('alertmessege'))
		
	@endif
	
</body>

</html>
