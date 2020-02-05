<!-- Header center -->
<div class="header-center">
		<div class="container">
			<div class="row">
				<!-- Menuhome -->
				<div class="col-lg-8 col-md-8 col-sm-1 col-xs-3 header-menu">
					<div class="megamenu-style-dev megamenu-dev">
						<div class="responsive">
							<nav class="navbar-default">
								<div class="container-megamenu horizontal">
									<div class="navbar-header">
										<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div class="megamenu-wrapper">
										<span id="remove-megamenu" class="fa fa-times"></span>
										<div class="megamenu-pattern">
											<div class="container">
												<ul class="megamenu" data-transition="slide" data-animationtime="500">
													<li class="">
														<p class="close-menu"></p>
														<a href="{{url('/')}}" class="clearfix">
															<strong>
																Home
															</strong>
														</a>
													</li>
													<li class="full-width option2 with-sub-menu hover">
														<p class="close-menu"></p>
														<a class="clearfix">
															<strong>
																Features
															</strong>
															<span class="labelopencart"></span>
															<b class="caret"></b>
														</a>
														<div class="sub-menu" style="width: 100%;">
															<div class="content">
																<div class="row">
																	<div class="col-sm-12">
																		<div class="html ">
																			<div class="row">
																				<div class="col-md-3">
																					<div class="column">
																						<a href="#" class="title-submenu">Listing pages</a>
																						<div>
																							<ul class="row-list">
																								<li><a href="">Product </a></li>
																								<li><a href="category-v2.html">Category Page 2</a></li>
																								<li><a href="category-v3.html">Category Page 3</a></li>
																							</ul>

																						</div>
																					</div>
																				</div>
																				<div class="col-md-3">
																					<div class="column">
																						<a href="#" class="title-submenu">Product pages</a>
																						<div>
																							<ul class="row-list">
																								<li><a href="">Product Details</a></li>
																								<li><a href="product-v2.html">Image size - medium</a></li>
																								<li><a href="product-v3.html">Image size - big</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3">
																					<div class="column">
																						<a href="#" class="title-submenu">Shopping pages</a>
																						<div>
																							<ul class="row-list">
																								<li><a href="{{route('product.cart.add')}}">Shopping Cart Page</a></li>
																								<li><a href="{{route('product.checkout')}}">Checkout Page</a></li>
																								<li><a href="{{route('product.compare')}}">Compare Page</a></li>
																								<li><a href="{{route('product.wishlist')}}">Wishlist Page</a></li>

																							</ul>
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3">
																					<div class="column">
																						<a href="#" class="title-submenu">My Account pages</a>
																						<div>
																							<ul class="row-list">
																								<li><a href="{{route('login')}}">Login Page</a></li>
																								<li><a href="{{route('register')}}">Register Page</a></li>
																								<li><a href="{{route('customer.account')}}">My Account</a></li>
																								<li><a href="{{route('customer.order')}}">Order History</a></li>
																								<li><a href="{{route('customer.order.info')}}">Order Information</a></li>
																								<li><a href="{{route('customer.order.return')}}">Product Returns</a></li>
																								<li><a href="{{route('customer.gift.voucher')}}">Gift Voucher</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="item-style1 content-full with-sub-menu hover">
														<p class="close-menu"></p>
														<a class="clearfix">
															<strong>
																Colections
															</strong>
															<span class="labelNew"></span>
															<b class="caret"></b>
														</a>
														<div class="sub-menu" style="width: 100%; right: 0px;">
															<div class="content">
																<div class="row">
																	<div class="col-sm-3">
																		<div class="link ">
																			<img src="{{asset('public/frontend/image/catalog/demo/menu/menu-img1.jpg')}}" alt="" style="width: 100%;">
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="link ">
																			<img src="{{asset('public/frontend/image/catalog/demo/menu/menu-img2.jpg')}}" alt="" style="width: 100%;">
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="link ">
																			<img src="{{asset('public/frontend/image/catalog/demo/menu/menu-img3.jpg')}}" alt="" style="width: 100%;">
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="link ">
																			<img src="{{asset('public/frontend/image/catalog/demo/menu/menu-img4.jpg')}}" alt="" style="width: 100%;">
																		</div>
																	</div>
																</div>
																<div class="border"></div>
																<div class="row">
																	<div class="col-sm-3">
																		<div class="categories ">
																			<div class="row">
																				<div class="col-sm-12 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="category-v3.html" onclick="window.location = '#';" class="main-menu">Food &amp; Restaurant</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																									<li><a href="#" onclick="window.location = '#';">Women Fashion</a></li>
																									<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																									<li><a href="#" onclick="window.location = '#';">Fashion</a></li>
																									<li><a href="#" onclick="window.location = '#';">Trending</a></li>
																									<li><a href="#" onclick="window.location = '#';">Macs</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="categories ">
																			<div class="row">
																				<div class="col-sm-12 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Fashion &amp; Accessories</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Pearl Jewelry</a></li>
																									<li><a href="#" onclick="window.location = '#';">Destinations</a></li>
																									<li><a href="#" onclick="window.location = '#';">Camera New</a></li>
																									<li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
																									<li><a href="#" onclick="window.location = '#';">Camera New</a></li>
																									<li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="categories ">
																			<div class="row">
																				<div class="col-sm-12 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Sport &amp; Entertaiment</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																									<li><a href="#" onclick="window.location = '#';">Fashion &amp; Accessories</a></li>
																									<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																									<li><a href="#" onclick="window.location = '#';">Men Fashion</a></li>
																									<li><a href="#" onclick="window.location = '#';">Knage unget</a></li>
																									<li><a href="#" onclick="window.location = '#';">Qunge genga</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="categories ">
																			<div class="row">
																				<div class="col-sm-12 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Mobile &amp; Table</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Web Cameras</a></li>
																									<li><a href="#" onclick="window.location = '#';">Windows</a></li>
																									<li><a href="#" onclick="window.location = '#';">Pearl mens</a></li>
																									<li><a href="#" onclick="window.location = '#';">Pearl Jewelry</a></li>
																									<li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="item-style2 content-full feafute with-sub-menu hover">
														<p class="close-menu"></p>
														<a class="clearfix">
															<strong>
																Accessories
															</strong>
															<b class="caret"></b>
														</a>
														<div class="sub-menu" style="width: 100%">
															<div class="content">
																<div class="row">
																	<div class="col-sm-8">
																		<div class="categories ">
																			<div class="row">
																				<div class="col-sm-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Fashion &amp; Accessories</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Digital &amp; Electronics</a></li>
																									<li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
																									<li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
																									<li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
																									<li><a href="#" onclick="window.location = '#';">Sport &amp; Entertaiment</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Pearl mens</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Web Cameras</a></li>
																									<li><a href="#" onclick="window.location = '#';">Windows</a></li>
																									<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																									<li><a href="#" onclick="window.location = '#';">Knage unget</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-sm-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Sport &amp; Entertaiment</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Jean</a></li>
																									<li><a href="#" onclick="window.location = '#';">Latenge mange</a></li>
																									<li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
																									<li><a href="#" onclick="window.location = '#';">Trending</a></li>
																									<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Mobile &amp; Table</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Case</a></li>
																									<li><a href="#" onclick="window.location = '#';">Laptop &amp; Notebook</a></li>
																									<li><a href="#" onclick="window.location = '#';">Laptops &amp; Notebooks</a></li>
																									<li><a href="#" onclick="window.location = '#';">Dress Ladies</a></li>
																									<li><a href="#" onclick="window.location = '#';">Kitchen</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-sm-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Cell &amp; Cable</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
																									<li><a href="#" onclick="window.location = '#';">Fashion &amp; Accessories</a></li>
																									<li><a href="#" onclick="window.location = '#';">Qunge genga</a></li>
																									<li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
																									<li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Food &amp; Restaurant</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Fashion</a></li>
																									<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																									<li><a href="#" onclick="window.location = '#';">Necklaces</a></li>
																									<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																									<li><a href="#" onclick="window.location = '#';">Men Fashion</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="product best-sellers-menu">
																			<div class="image">
																				<a href="#" onclick="window.location = '#'"><img src="{{asset('public/frontend/')}}/image/catalog/demo/product/fashion/24.png" alt=""></a>
																			</div>
																			<div class="name"><a href="#" onclick="window.location = '#'">Est Officia Including Shoes Beautiful Pieces Canaz</a></div>
																			<div class="price">
																				$98.00
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="style-page with-sub-menu hover">
														<p class="close-menu"></p>
														<a class="clearfix">
															<strong>
																Pages
															</strong>
															<b class="caret"></b>
														</a>
														<div class="sub-menu" style="width: 40%;">
															<div class="content">
																<div class="row">
																	<div class="col-md-6">
																		<ul class="row-list">
																			<li><a class="subcategory_item" href="faq.html">FAQ</a></li>

																			<li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
                                                                        <li><a class="subcategory_item" href="{{ route('frontend.contract.us.index') }}">Contact us</a></li>
																			<li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
																		</ul>
																	</div>
																	<div class="col-md-6">
																		<ul class="row-list">
																			<li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
																			<li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
																			<li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
																			<li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</li>


													<li class="">
														<p class="close-menu"></p>
														<a href="blog-page.html" class="clearfix">
															<strong>
																Blog
															</strong>
														</a>
													</li>

													<!-- About us menu start -->
													<li class="">
														<p class="close-menu"></p>
														<a href="{{route('about.us')}}" class="clearfix">
															<strong>
																About Us
															</strong>
														</a>
													</li>
													<!-- About us menu end -->

													<li class="deal-h5 hidden">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<strong>
																<img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/hot-block.png" alt="">Buy This Theme!
															</strong>
														</a>
													</li>
													<li class="deal-h5 hidden">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<strong>
																Today Deals
															</strong>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<!--Searchhome-->
				<div class="col-lg-4 col-md-4 col-sm-11 col-xs-9 header-search">
					<div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                    <form method="GET" action="" id="search_form">
                            @csrf
							<div id="search0" class="search input-group form-group">
								<div class="select_category filter_type  icon-select">
									<select class="no-border" id="category_id" name="category_id">
                                        <option value="all">All Categories </option>
                                        @foreach ($search_categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->cate_name }}</option>
                                            @foreach ($category->sub_categories as $sub_category)
                                                <option value="{{ $sub_category->id }}">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $sub_category->subcate_name }}
                                                </option>
                                            @endforeach
                                        @endforeach
									</select>
								</div>
								<input class="autosearch-input form-control" id="product_name" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="product_name">

								<span class="input-group-btn">
									<button type="button" class="button-search btn btn-default btn-lg" name="submit_search">
                                        <i class="fa fa-search"></i><span class="hidden">Search</span>
                                    </button>
								</span>
							</div>
							{{-- <input type="hidden" name="route" value="product/search"> --}}
						</form>
					</div>
                </div>
			</div>
		</div>
	</div>
	<!-- //Header center -->
