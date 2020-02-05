@extends('layouts.adminapp')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/adminpanel')}}/assets/plugins/select2/css/select2.min.css">
            <!-- content wrpper -->
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
											<span class="panel_icon"><i class="fas fa-border-all"></i></span><span>All Order</span>
										</div>
									</div>
									<div class="col-md-6 text-right">
										/
									</div>
								</div>

							</div>
							<form action="" method="Post">
						     @csrf
							<button type="submit" style="margin: 5px;" class="btn btn-danger" ><i class="fa fa-trash"></i> Delete All</button>
             				<button type="button"  style="margin: 5px;" class="btn btn-success" ><i class="fas fa-recycle"></i> <a href="{{route('admin.trash.sitebanner')}}" style="color: #fff;">Restore</a></button>
							<div class="panel_body">
								<div class="table-responsive">
		                         <table id="dataTableExample1" class="table table-bordered table-striped table-hover mb-2">
		                              <thead>
		                                  <tr>
		                                      <th>
                    												<label class="chech_container mb-4">
                    													<input type="checkbox"  id="check_all">
                    													<span class="checkmark"></span>
                    												</label>
		                                      </th>
		                                      <th>#</th>
		                                      <th>Order Code</th>
		                                      <th>Order Quantity</th>
                                          <th>Amount</th>
		                                      <th>Customer</th>
		                                      <th>Delevery Status</th>
		                                      <th>Payment Method</th>
		                                      <th>Payment Status</th>
		                                      <th>Payment action</th>
		                                      <th>Manage</th>
		                                  </tr>
		                              </thead>
		                              <tbody>
                                      @foreach($complate as $key => $data)
		                                  <tr>
	                                  		  <td>
                    												<label class="chech_container mb-4">
                    													<input type="checkbox" name="delid[]" class="checkbox" value="">
                    													<span class="checkmark"></span>
                    												</label>
		                                      </td>
		                                      <td>{{++$key}}</td>
		                                      <td>{{$data->order_id}}</td>
		                                      <td>{{$data->total_quantity}}</td>
                                          <td>{{$data->total_price}}</td>
		                                      <td>{{$data->user_id}}</td>
		                                      <td>
                                            @if($data->delevary==1)
	                                           <span class="btn btn-info">Pending</span>
                                            @else
	                                           <span class="btn btn-success">Delevered</span>
                                            @endif
                                          </td>
		                                      <td>
                                            @if($data->payment_method_id == 1)
                                            <p>Cash On Delivery</p>
                                            @elseif($data->payment_method_id == 2)
                                            <p>Stype</p>
                                            @elseif($data->payment_method_id == 3)
                                            <p>PayPal</p>
                                            @endif

                                          </td>

		                                      <td>
																					    <span class="btn btn-info">unpaid</span>
																					    <span class="btn btn-success">paid</span>
		                                      </td>
                                          <td>
                                              <label class="switch">
                                               <input type="checkbox" onchange="update_published(this)" value="1">
                                               <span class="slider round"></span>
                                             </label>
                                           </td>

		                                       <td>
		                                          <a  href="{{url('admin/product/order/invoice/'.$data->id)}}" class="btn btn-default btn-sm text-white" data-toggle="tooltip" data-placement="right" title="active" data-original-title="active"><i class="far fa-eye"></i></a>

																							<a href="" class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-placement="right" title="active" data-original-title="Deactive"><i class="far fa-thumbs-down"></i></a>
		                                          <a id="delete" href="" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-placement="right" title="Delete" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
		                                       </td>
		                                  </tr>
                                      @endforeach

		                              </tbody>
		                          </table>
		                      </div>
							</div>
						  </form>
						</div>
					</section>
				</div>
			</div>
<!-- modal start-->
  <!-- The Modal -->



<!-- edit modal end -->
<script type="text/javascript">

    $(document).ready(function () {

        $('#check_all').on('click', function(e) {

         if($(this).is(':checked',true))

         {
            $(".checkbox").prop('checked', true);

         } else {

            $(".checkbox").prop('checked',false);

         }

        });

    });

</script>




@endsection
