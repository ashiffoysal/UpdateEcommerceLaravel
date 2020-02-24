<div class="panel-left__top clearfix text-center">
				<div class="panel-logo">

					@php
						$logo=App\Logo::where('id',1)->first();
					@endphp
					<a href="{{url('/')}}"><img src="{{asset('/'.$logo->front_logo)}}" title="Your Store" alt="Your Store"></a>
				</div>
				<form action="{{ route('mobile.product.search') }}" method="get">
                    <div class="panel-search">
                        @csrf
                        <div id="search" class="input-group">
                        <input type="text" name="search_field" value="{{ isset($search_field) ? $search_field : "" }}" id="search_field" placeholder="Search" class="form-control input-lg">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default btn-link"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </form>


			</div>

			<div class="panel-left__midde">
				<div class="panel-group" id="panel-category" role="tablist" aria-multiselectable="true">

					@php
						$category=App\Category::where('is_deleted',0)->where('cate_status',1)->get();
					@endphp
						@foreach($category as $key => $cate)
						<div class="panel panel-default">
								@php
									$cate_id=$cate->id;
									$subcate=App\SubCategory::where('is_deleted',0)->where('subcate_status',1)->where('cate_id',$cate_id)->first();
								@endphp
									@if($subcate)
									<div class="panel-heading" role="tab">
										<a href="{{url('category/'.$cate->cate_slug.'/'.$cate->id)}}">{{$cate->cate_name}}</a>
										<span class="head"><a class="pull-right accordion-toggle" data-toggle="collapse" data-parent="#panel-category" href="#{{$cate->cate_slug}}" aria-expanded="true"></a></span>
									</div>
									<div id="{{$cate->cate_slug}}" class="panel-collapse collapse " role="tabpanel">
										<ul>
											@php
												$subcatenew=App\SubCategory::where('is_deleted',0)->where('subcate_status',1)->where('cate_id',$cate_id)->get();
											@endphp
											@foreach($subcatenew as $scate)
												@php
													$subcategory_id=$scate->id;
													$resub=App\ReSubCategory::where('is_deleted',0)->where('resubcate_status',1)->where('subcate_id',$subcategory_id)->first();
												@endphp
												@if($resub)
													@php
													$subcateg_id=$scate->id;
													$resubcategory=App\ReSubCategory::where('is_deleted',0)->where('resubcate_status',1)->where('subcate_id',$subcateg_id)->get();
													@endphp
													<li><a href="{{url('subcategory/'.$scate->subcate_slug.'/'.$scate->id)}}">{{$scate->subcate_name}}</a></li>
													@foreach($resubcategory as $ress)
													<li><a href="{{url('resubcategory/'.$ress->resubcate_slug.'/'.$ress->id)}}">{{$ress->resubcate_name}}</a></li>
													@endforeach
												@else
													<li><a href="{{url('subcategory/'.$scate->subcate_slug.'/'.$scate->id)}}">{{$scate->subcate_name}}</a></li>
												@endif

											@endforeach
										</ul>
									</div>
									@else
									<div class="panel-heading" role="tab">
										<a href="{{url('category/'.$cate->cate_slug.'/'.$cate->id)}}">{{$cate->cate_name}}</a>
									</div>
									@endif

						</div>
						@endforeach
					<!--  -->

				</div>
			</div>

			<div class="panel-left__bottom clearfix text-center">
				<div class="col-xs-6">
					<i class="fa fa-check-square-o" aria-hidden="true"></i>
					<div class="bot-inner">
						<a href="{{url('mobile/comparelist')}}">Compare</a>
					</div>
				</div>
				<div class="col-xs-6">
					<i class="fa fa-heart" aria-hidden="true"></i>
					<div class="bot-inner">
						@if(Auth::guard('web')->check())
						<a href="{{url('mobile/allwishlist')}}">Wish List</a>
						@else
						<a href="{{url('/mobile/login')}}">Wish List</a>
						@endif
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
