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
			<h1 class="title">Order History</h1>
		</header>
		<!-- //End Bar Nav -->
		<div class="content">
      <div class="container">
			<!-- //Begin Main Content -->
								<div class="row">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><i class="fas fa-luggage-cart"></i>Total Order History</h4>
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<td class="text-center">OrderID</td>
																<td class="text-left">Quantity</td>
																<td class="text-right">Total price</td>
																<td class="text-right">Status</td>
																<td class="text-right">Manage</td>
															</tr>
														</thead>
														<tbody>
																@foreach($history as $data)
																<tr>
																	<td class="text-center"># {{$data->order_id}}</td>
																	<td class="text-left">{{$data->total_quantity}}</td>
																	<td class="text-right">{{$data->total_price}}</td>
																	@if($data->delevary==1)
			                            <td class="text-center">Pending</td>
			                            @elseif($data->delevary==2)
			                            <td class="text-center">On Process</td>
			                            @elseif($data->delevary==3)
			                            <td class="text-center">On Delevery</td>
			                            @elseif($data->delevary==4)
			                            <td class="text-center">Shiped</td>
			                            @else
			                            <td class="text-center">Reject</td>
			                            @endif
																	<td class="text-right">
	                                  <a href="{{url('history/details/'.$data->id)}}" title="view" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></a></td>
	                                </td>
																</tr>
															@endforeach

														</tbody>
													</table>
												</div>
												{{$history->links()}}
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
