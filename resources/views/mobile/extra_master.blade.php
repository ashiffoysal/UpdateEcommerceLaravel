
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png"/>



	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>


    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('public/mobile/css/bootstrap/css/bootstrap.min.css')}}">
	<link href="{{asset('public/mobile/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/mobile/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('public/mobile/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('public/mobile/js/ratchet/ratchet.css')}}" rel="stylesheet">

		<link href="{{asset('public/mobile/js/slick/slick.css')}}" rel="stylesheet">
      <link href="{{asset('public/mobile/css/themecss/lib.css')}}" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
	<!-- Theme CSS
	============================================ -->
	<link href="{{asset('public/mobile/css/mobile.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/product.css')}}" rel="stylesheet">

</head>

<body class="ltr mobilelayout-0">

	<!-- Begin Main wrapper -->
    <div id="wrapper" >


	@include('mobile.include.footermenu')

	@yield('page_content')

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

<script type="text/javascript" src="{{asset('public/mobile/js/slick-slider/slick.js')}}"></script>

<script type="text/javascript" src="{{asset('public/mobile/js/slick/slick.min.js')}}"></script>

<script type="text/javascript" src="{{asset('public/mobile/js/ratchet/ratchet.js')}}"></script>

<script type="text/javascript" src="{{asset('public/mobile')}}/js/jquery-ui/jquery-ui.min.js"></script>

<script type="text/javascript" src="{{asset('public/mobile/js/themejs/libs.js')}}"></script>

<!-- Theme files
============================================ -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script>
		@if(Session::has('messege'))
		var type = "{{Session::get('alert-type','info')}}"
		switch (type) {
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
</script>

<script type="text/javascript" src="{{asset('public/mobile/js/mobile.js')}}"></script>
<script type="text/javascript" src="{{asset('public/mobile/js/themejs/addtocart.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.product-options li.radio').click(function(){
			$(this).addClass(function() {
				if($(this).hasClass("active")) return "";
				return "active";
			});
			$(this).siblings("li").removeClass("active");
			$(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
		})

		if(!$('.slider').hasClass('slick-initialized')) {
			$('.slider-for').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				fade: true,
				slideMargin: 10,
				arrows: false,
				infinite: true,
				asNavFor: '.slider-nav'
			});
			$('.slider-nav').slick({
			  slidesToShow: 4,
			  slidesToScroll: 1,
			  asNavFor: '.slider-for',
			  slideMargin: 10,
			  dots: false,
			  arrows: false,
			  centerMode: false,
			  focusOnSelect: true,

			});
		}
	});

</script>

<script type="text/javascript">

	$(document).ready(function () {
		// Click Button
		$('.list-view .btn').each(function() {
			var ua = navigator.userAgent,
			event = (ua.match(/iPad/i)) ? 'touchstart' : 'click';
			$(this).bind(event, function() {
				$(this).addClass(function() {
					if($(this).hasClass('active')) return '';
					return 'active';
				});
				$(this).siblings('.btn').removeClass('active');
				$catalog_mode = $(this).data('view');
				display($catalog_mode);
			});

		});
	});

	// Check if Cookie exists
	if ($.cookie('display')) { view = $.cookie('display');}
	else {view = 'grid';}

	if(view) display(view);

	function display(view) {
		$('.products-list').removeClass('list grid').addClass(view);
		$('.list-view .btn').removeClass('active');
		if(view == 'list') {
			$('.products-list .product-layout').removeClass('col-xs-6').addClass('col-xs-12');
			$('.list-view .' + view).addClass('active');
			$.cookie('display', 'list');
		}else{
			$('.products-list .product-layout').removeClass('col-xs-12').addClass('col-xs-6');
			$('.list-view .' + view).addClass('active');
			$.cookie('display', 'grid');
		}
	}


//-->
</script>




<script>
    $(document).ready(function(){
        $('.search_content_section').hide();
        $('#product_name').on('keyup', function(){
            var product_name = $(this).val();
            if (product_name === "") {
                $('.search_content_section').hide();
                $('.main_content').show();
            }else{
                $('.search_content_section').show();
                $('.main_content').hide();
            }

            $.ajax({
                url:"{{ url('mobile/search/product/by/product_name') }}"+"/"+product_name,
                type:'get',
                success:function(data){
                   // console.log(data);
                    if (!$.isEmptyObject(data)) {
                        $('#search_result_product').empty();
                        $('#search_result_product').append(data);
                    }else{
                        $('#search_result_product').empty();
                        $('#search_result_product').append('<h4 style="margin-left:10px;">No Data Found</h4>');
                    }
                }
            });
        });
    });
    console.log('GET');

</script>
@stack('js')
</body>
</html>
