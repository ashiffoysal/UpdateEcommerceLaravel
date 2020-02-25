@extends('mobile.extra_master')

@section('page_content')

	<!-- Begin Bar Nav -->
	<header class="bar bar-nav ">
	<a class="btn btn-link btn-nav pull-left" href="{{ URL::previous() }}">
		<span class="icon icon-left-nav"></span>
	</a>
	<a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
		<span class="icon icon-bars"></span>
	</a>
	<h1 class="title">Account Details</h1>
</header>
<!-- //End Bar Nav -->

<div class="content">
	<!-- //Begin Main Content -->
	<div class="container product-detail">
    <aside class="col-xs-12 content-aside right_column">
						<div class="module">
							<h3 class="modtitle"><span>Account</span></h3>
							<div class="module-content custom-border">
								<ul class="list-box">

									<li><a href="#">My Account</a></li>
									<li><a href="{{url('mobile/allwishlist')}}">Wish List</a></li>
									<li><a href="{{url('mobile/comparelist')}}">Compare List</a></li>
									<li><a href="{{url('product/orderhistory')}}">Order History</a></li>
									<li><a href="{{url('order/traking')}}">Order Traking</a></li>
									<li><a href="{{route('mobile.logout')}}">LogOut</a>
									</li>
								</ul>
							</div>
						</div>
      </aside>
	</div>
</div>

@endsection
