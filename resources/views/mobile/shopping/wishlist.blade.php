@extends('mobile.extra_master')
@section('page_content')
<!-- Begin Bar Nav -->
		<header class="bar bar-nav ">
			<a class="btn btn-link btn-nav pull-left" href="#" onclick="history.go(-1); return false;">
				<span class="icon icon-left-nav"></span>
			</a>
			<a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
				<span class="icon icon-bars"></span>
			</a>
			<h1 class="title">wishlist</h1>
		</header>
		<!-- //End Bar Nav -->

		<div class="content">
      <div class="container">


			<!-- //Begin Main Content -->
								<div class="row">

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><i class="fa fa-heart-o"></i> wishlist Product</h4>
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<td class="text-center">Image</td>
																<td class="text-left">Product Name</td>
																<td class="text-left">SKU</td>
																<td class="text-right">price</td>
																<td class="text-right">Manage</td>
															</tr>
														</thead>
														<tbody>
                              @foreach($allwishlist as $wish)
															<tr>
																<td class="text-center">
                                  <a href=""><img width="100px" src="{{asset('public/uploads/products/thumbnail/'.$wish->product->thumbnail_img)}}"  class="img-thumbnail"></a>
																</td>
																<td class="text-left"><a href="">{{ Str::limit($wish->product->product_name,15) }}</a></td>
																<td class="text-left">{{$wish->product->product_sku}}</td>
																<td class="text-right">{{$wish->product->product_price}}</td>
																<td class="text-right">
                                  <a href="{{url('product/details/'.$wish->product->slug.'/'.$wish->product->id)}}" type="button" class="btn btn-sm btn-primary" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                  <a href="{{url('mobile/wishlist/delete/'.$wish->id)}}" title="Remove" class="delete btn btn-danger btn-sm"><i class="fa fa-times"></i></a></td>
                                </td>
															</tr>
                              @endforeach
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>

							</div>
						</div>
					</div>


				</div>
			</div>
			<!-- //End Main Content -->

			</div>
			<!-- //End Footer Content -->
		</div>


@endsection
