@extends('layouts.adminapp')
@section('admin_content')
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
											<span class="panel_icon"><i class="fas fa-border-all"></i></span><span>All Deleted Flash Deal</span>
										</div>
									</div>
									<div class="col-md-6 text-right">

									</div>
								</div>

							</div>
							<form action="{{route('admin.flash.deal.multiple.force.delete')}}" method="post">
						     @csrf
							<button type="submit" style="margin: 5px;" name="submit" class="btn btn-danger" value="delete" ><i class="fa fa-trash"></i> Delete All</button>
				             <button type="submit" style="margin: 5px;" name="submit" class="btn btn-success" value="restore" ><i class="fas fa-trash-restore-alt"></i> Restore All </button>

				             <button type="button"  style="margin: 5px;" class="btn btn-info" ><i class="fas fa-undo"></i> <a href="{{route('admin.flash.deal.index')}}" style="color: #fff;">Back</a></button>
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
		                                      <th>Title</th>
		                                      <th>Start Date</th>
		                                      <th>End Date</th>

		                                      <th>manage</th>
		                                  </tr>
		                              </thead>
		                              <tbody>
		                       			@foreach($allFlashDealTrashes as $flashDealTrashe)
		                                  <tr>
	                                  		  <td>
												<label class="chech_container mb-4">
													<input type="checkbox" name="delid[]" class="checkbox" value="{{$flashDealTrashe->id}}">
													<span class="checkmark"></span>
												</label>
		                                      </td>
		                                      <td>{{$flashDealTrashe->title}}</td>
		                                      <td>{{$flashDealTrashe->start_date}}</td>
		                                      <td>{{$flashDealTrashe->end_date}}</td>

		                                       <td>
                                               <a  href="{{ route('admin.flash.deal.single.refactor', $flashDealTrashe->id) }}" class="btn btn-info btn-sm text-white" data-toggle="tooltip" data-placement="right" title="active" data-original-title="Deactive"><i class="fas fa-recycle"></i></a>
													|
                                               <a id="delete" href="{{ route('admin.flash.deal.single.force.delete', $flashDealTrashe->id) }}" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-placement="right" title="Delete" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
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

<!-- modal end -->

<!-- edit modal -->

<!-- edit modal start-->


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
