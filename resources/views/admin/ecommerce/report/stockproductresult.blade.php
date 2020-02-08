@extends('layouts.adminapp')
@section('admin_content')

<div class="content_wrapper">
				<!--middle content wrapper-->
				<!-- page content -->
				<div class="middle_content_wrapper">
					<section class="page_content">
						<!-- panel -->
						<div class="panel mb-0">
							<div class="panel_header">
								<div class="row">
									<div class="col-md-6">
										<div class="panel_title">
											<span class="panel_icon"><i class="fas fa-border-all"></i></span><span>Stock Product</span>
										</div>
									</div>
									<div class="col-md-6 text-right">

									</div>
								</div>
								
							</div>
							<br>
							<form action="{{url('/get/admin/report/category/filter')}}" method="get">
						     <div class="row">
						     	<div class="col-md-3"></div>
						     	<div class="col-md-4">
						     		@php
						     			$category=App\Category::where('is_deleted',0)->get();
						     		@endphp
						     		<select class="form-control" name="cate_id" id="cate_id">
						     			<option value="0">--Select Category--</option>
						     			@foreach($category as $cate)
						     			<option value="{{$cate->id}}">{{$cate->cate_name}}</option>
						     			@endforeach
						     		</select>
						     	</div>
						     	<div class="col-md-2">
						     		<button class="btn btn-success">Filter</button>
						     	</div>
						     </div>
						    </form>
							<br>
							<div class="panel_body">
								<div class="table-responsive result" >
								   <table id="dataTableExample1" class="table table-bordered table-striped table-hover mb-2">
								          <thead>
								              <tr class="text-center">
								                 
								                  <th>Product Name</th>
								                  <th>Current qty</th>
								              </tr>
								          </thead>
								          <tbody id="result">
								          	@foreach($report as $data)
												<tr class="text-center">
													<td>{{$data->product_name}}</td>
													<td>{{$data->product_qty}}</td>
												</tr>
								          	@endforeach
								          </tbody>
								 </table>
		                      </div>
							</div>
						 
						</div>
					</section>
				</div>
			</div>


@endsection