<!-- Header Container  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<header id="header" class=" typeheader-1">
	<!-- Header Top -->
	<div class="header-top hidden-compact">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-xs-6 header-logo ">
					<div class="navbar-logo">
						<a href="{{ url('/') }}"><img src="{{asset('public/frontend/image/catalog/demo/logo/logo-2.png')}}" alt="Your Store" width="110" height="27" title="Your Store"></a>
					</div>
				</div>
				<div class="col-lg-7 header-sevices">
					<div class="module html--sevices ">
						<div class="clearfix sevices-menu">
							<ul>
								<li class="col-md-4 item home">
									<div class="icon"></div>
									<div class="text">
										<a>100 S Manhattan St, Amarillo,</a><a>
										</a>
										<p><a>TX 79104, North America</a></p>
										<a>
										</a>
									</div>
								</li>
								<li class="col-md-4 item mail">
									<div class="icon"> </div>
									<div class="text">
										<a class="name" href="#">Sales@MagenTech.Com</a>
										<p>( +123 ) 456 7890</p>
									</div>
								</li>
								<li class="col-md-4 item delivery">
									<div class="icon"> </div>
									<div class="text">
										<a class="name" href="#">Free Delivery</a>
										<p>On order over $89.00</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-xs-6 header-cart">
					<div class="shopping_cart">
						<div id="cart" class="btn-shopping-cart">
						@php
							$userid = Request::ip();
						@endphp
							<a onclick="myAddToCartData()" data-id="{{$userid}}" id="cartdataid" data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
								<div class="shopcart">
									<span class="handle pull-left"></span>
									<div class="cart-info">
										<h2 class="title-cart">Shopping cart</h2>
										<h2 class="title-cart2 hidden">My Cart</h2>
										<span class="total-shopping-cart cart-total-full">


											@php
												$userid =  \Request::getClientIp(true);
											@endphp

											<span class="items_cart" id="cartdatacount">{{Cart::session($userid)->getTotalQuantity() }}</span>
											<span class="items_cart2">item(s)</span>
											<span class="items_carts" id="product_price"> - {{Cart::session($userid)->getTotal()}}</span>
										</span>
									</div>
								</div>
							</a>

							<ul class="dropdown-menu pull-right shoppingcart-box">
								<li class="content-item" id="addtocartshow">





								</li>
								<li>
									<div class="checkout clearfix">
										<a href="{{route('product.cart.add')}}" class="btn btn-view-cart inverse"> View Cart</a>
										<a href="{{route('checkout.page.show')}}" class="btn btn-checkout pull-right">Checkout</a>
									</div>
                                </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Header Top -->

	<!-- include main menu area -->

	@include('frontend.include.mainmenu.home1')


	<div class="header-form hidden-compact">
		<div class="button-header current">
			<i class="fa fa-bars"></i>
		</div>
		<div class="dropdown-form toogle_content">
			<div class="pull-left">
				<form action="#" method="post" enctype="multipart/form-data" id="form-language">
					<div class="btn-group">
						<button class="btn-link dropdown-toggle" data-toggle="dropdown">
							<img src="{{asset('public/frontend/')}}/image/catalog/flags/gb.png" alt="English" title="English">
							<span class="hidden-xs hidden-sm hidden-md">English</span>&nbsp;<i class="fa fa-angle-down"></i>
						</button>

						<ul class="dropdown-menu">
							<li>
								<button class="btn-block language-select" type="button" name="ar-ar"><img src="{{asset('public/frontend/')}}/image/catalog/flags/ar.png" alt="Arabic" title="Arabic"> Arabic</button>
							</li>
							<li>
								<button class="btn-block language-select" type="button" name="en-gb"><img src="{{asset('public/frontend/')}}/image/catalog/flags/gb.png" alt="English" title="English"> English</button>
							</li>
						</ul>
					</div>
					<input type="hidden" name="code" value="">
					<input type="hidden" name="redirect" value="index.html">
				</form>
			</div>
			<div class="pull-left">
				<form action="#" method="post" enctype="multipart/form-data" id="form-currency">
					<div class="btn-group">
						<button class="btn-link dropdown-toggle" data-toggle="dropdown">
							$<span class="hidden-xs"> US Dollar</span>
							<i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu">
							<li>
								<button class="currency-select btn-block" type="button" name="EUR">€ Euro</button>
							</li>
							<li>
								<button class="currency-select btn-block" type="button" name="GBP">£ Pound Sterling</button>
							</li>
							<li>
								<button class="currency-select btn-block" type="button" name="USD">$ US Dollar</button>
							</li>
						</ul>
					</div>
					<input type="hidden" name="code" value="">
					<input type="hidden" name="redirect" value="index.html">
				</form>
			</div>
			<span class="text">More</span>
			<ul class="dropdown-menu">
				<li class="wishlist"><a href="wishlist.html" id="wishlist-total" class="top-link-wishlist" title="Wish List (2) "><span>Wish List (0) </span></a></li>
				<li class="checkout"><a href="cart.html" class="top-link-checkout" title="Checkout"><span>Checkout</span></a></li>
			</ul>
        </div>

        {{-- <div class="button-user">
			<div class="user-info asd">
				<a data-toggle="modal" data-target="#so_sociallogin" href="#">Login</a>
			</div>
		</div> --}}


	</div>
</header>
<!-- //Header Container  -->

<script>
    function myAddToCartData() {
		var userip =$("#cartdataid").data("id");

        $.post('{{ route('add.cart.show') }}', {_token: '{{ csrf_token() }}',user_id: userip},
            function(data) {
			   $('#addtocartshow').html(data);
			console.log(data);

            });
	}

	myAddToCartData();
</script>



