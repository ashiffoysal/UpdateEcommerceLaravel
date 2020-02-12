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

													<!-- Contact us menu start -->
													<li class="">
														<p class="close-menu"></p>
														<a href="{{url('/warranty')}}" class="clearfix">
															<strong>
															Warranty
															</strong>
														</a>
													</li>
													<li class="">
														<p class="close-menu"></p>
														<a href="{{url('/support')}}" class="clearfix">
															<strong>
															Support
															</strong>
														</a>
													</li>
													<li class="">
														<p class="close-menu"></p>
														<a href="{{url('/faq')}}" class="clearfix">
															<strong>
															Faq
															</strong>
														</a>
													</li>
													<li class="">
														<p class="close-menu"></p>
														<a href="{{route('frontend.contract.us.index')}}" class="clearfix">
															<strong>
																Contact Us
															</strong>
														</a>
													</li>
													<!-- Contact us menu end -->

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
