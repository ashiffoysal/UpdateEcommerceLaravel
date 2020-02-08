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
											<span class="panel_icon"><i class="fas fa-border-all"></i></span><span>Best Sell Product</span>
										</div>
									</div>
									<div class="col-md-6 text-right">

									</div>
								</div>
								
							</div>
							<div class="panel_body">
								<div class="table-responsive result" >
								   <table id="dataTableExample1" class="table table-bordered table-striped table-hover mb-2">
								          <thead>
								              <tr class="text-center">
								                  <th class="text-center">#</th>
								                  <th>Product Name</th>
								                  <th>Sell Of Product</th>
								              </tr>
								          </thead>
								          <tbody>
								          	@foreach($bestsell as $key => $data)
												<tr class="text-center">
													<td>{{++$key}}</td>
													<td>{{$data->product_name}}</td>
													<td>{{$data->number_of_sale}}</td>
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