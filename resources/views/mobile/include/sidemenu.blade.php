<div class="panel-left__top clearfix text-center">
				<div class="panel-logo">
					<a href="index.html"><img src="{{asset('public/mobile')}}/image/demo-mobile/logo.png" title="Your Store" alt="Your Store"></a>
				</div>
				<div class="panel-search">
					<div id="search" class="input-group">
						<input type="text" name="search" value="" placeholder="Search" class="form-control input-lg">
						<span class="input-group-btn">
							<button type="button" class="btn btn-default btn-link"><i class="fa fa-search"></i></button>
						  </span>
					</div>
				</div>
			</div>
			
			<div class="panel-left__midde">
				<div class="panel-group" id="panel-category" role="tablist" aria-multiselectable="true">


				
					<div class="panel panel-default">
						<div class="panel-heading" role="tab">
							<a href="#">Jewelry</a>
							<span class="head"><a class="pull-right accordion-toggle" data-toggle="collapse" data-parent="#panel-category" href="#panel-category1" aria-expanded="true"></a></span>
						</div>
						<div id="panel-category1" class="panel-collapse collapse " role="tabpanel">
							<ul>
								<li>
									<a href="#">Necklaces</a>
								</li>
								<li>
									<a href="#">Pearl Jewelry</a>
								</li>
								<li>
									<a href="#">Slider 925</a>
								</li>
							</ul>
						</div>
					</div>


				
			
				</div>


			</div>

			<div class="panel-left__bottom clearfix text-center">
				<div class="col-xs-6">
					<i class="fa fa-check-square-o" aria-hidden="true"></i>
					<div class="bot-inner">
						<a href="compare.html">Compare</a>
					</div>
				</div>
				<div class="col-xs-6">
					<i class="fa fa-heart" aria-hidden="true"></i>
					<div class="bot-inner">
						<a href="wishlist.html">Wish List</a>
					</div>
				</div>

				<div class="col-xs-6 panel-left__language">
					<div class="btn-group languages-block">
						<form action="#" method="post" enctype="multipart/form-data" id="form-language">
							<div class="btn-group">
								<button class="btn-link dropdown-toggle" data-toggle="dropdown">
									<img src="{{asset('public/mobile')}}/image/demo/flags/gb.png" alt="English" title="English">
									<span class="hidden-xs">English</span>
									<i class="fa fa-angle-down"></i>
								</button>

								<ul class="dropdown-menu">
									<li>
										<button class="btn-block language-select" type="button" name="en-gb"><img src="{{asset('public/mobile')}}/image/demo/flags/gb.png" alt="English" title="English"> English</button>
									</li>
									<li>
										<button class="btn-block language-select" type="button" name="ar"><img src="{{asset('public/mobile')}}/image/demo/flags/lb.png" alt="Arabic" title="Arabic"> Arabic</button>
									</li>
								</ul>
							</div>
							<input type="hidden" name="code" value="">
							<input type="hidden" name="redirect" value="#">
						</form>
					</div>
					<h4>Language</h4>
				</div>
				<div class="col-xs-6 panel-left__currency">
					<div class="btn-group currencies-block">
						<form action="#" method="post" enctype="multipart/form-data" id="form-currency">
							<div class="btn-group">
								<button class="btn-link dropdown-toggle" data-toggle="dropdown">
									$ USD
									<i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu">
									<li>
										<button class="currency-select btn-block" type="button" name="EUR">€ Euro</button>
									</li>
									<li>
										<button class="currency-select btn-block" type="button" name="USD">$ USD</button>
									</li>
								</ul>
							</div>
							<input type="hidden" name="code" value="">
							<input type="hidden" name="redirect" value="index.html">
						</form>
					</div>

					<h4>Currency</h4>

				</div>
			</div>