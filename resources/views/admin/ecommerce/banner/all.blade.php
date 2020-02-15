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
								<span class="panel_icon"><i class="fas fa-border-all"></i></span><span>All Banner</span>
							</div>
						</div>
						<div class="col-md-6 text-right">
							<div class="panel_title">
								<a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal1"><i class="fas fa-plus"></i></span> <span>Add Banner</span></a>
							</div>
						</div>
					</div>

				</div>
				<form action="{{route('admin.banner.multisoftdelete')}}" method="Post">
					@csrf
					<button type="submit" style="margin: 5px;" class="btn btn-danger"><i class="fa fa-trash"></i> Delete All</button>
					<button type="button" style="margin: 5px;" class="btn btn-success"><i class="fas fa-recycle"></i> <a href="{{route('admin.trash.banner')}}" style="color: #fff;">Restore</a></button>
					<div class="panel_body">
						<div class="table-responsive">
							<table id="dataTableExample1" class="table table-bordered table-striped table-hover mb-2">
								<thead>
									<tr>
										<th>
											<label class="chech_container mb-4">
												<input type="checkbox" id="check_all">
												<span class="checkmark"></span>
											</label>
										</th>
										<th>#</th>
										<th>Slider Link</th>
										<th>Slider Image</th>
										<th>Banner Bottom Image</th>
										<th>Status</th>
										<th>manage</th>
									</tr>
								</thead>
								<tbody>
									@foreach($allbanner as $key => $data)
									<tr>
										<td>
											<label class="chech_container mb-4">
												<input type="checkbox" name="delid[]" class="checkbox" value="{{$data->id}}">
												<span class="checkmark"></span>
											</label>
										</td>
										<td>{{++$key}}</td>

										<td>{{Str::limit($data->ban_link,25)}}</td>

										<td>
											<img src="{{asset('public/uploads/banner/'.$data->ban_image)}}" height="45px;">
										</td>
										<td>
											<img src="{{asset('public/uploads/banner/'.$data->bottom_image)}}" height="45px;">
										</td>
										<td>
											@if($data->ban_status==1)
											<span class="btn btn-success">Active</span>
											@else
											<span class="btn btn-danger">Deactive</span>
											@endif
										</td>

										<td>
											@if($data->ban_status==1)
											<a href="{{url('admin/banner/deactive/'.$data->id)}}" class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-placement="right" title="active" data-original-title="active"><i class="far fa-thumbs-up"></i></a>
											@else
											<a href="{{url('admin/banner/active/'.$data->id)}}" class="btn btn-default btn-sm text-white" data-toggle="tooltip" data-placement="right" title="active" data-original-title="Deactive"><i class="far fa-thumbs-down"></i></a>
											@endif

											| <a class="editcat btn btn-sm btn-blue text-white" data-id="{{$data->id}}" title="edit" data-toggle="modal" data-target="#editModal"><i class="fas fa-pencil-alt"></i></a> |
											<a id="delete" href="{{url('admin/banner/softdelete/'.$data->id)}}" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-placement="right" title="Delete" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
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
<div class="modal fade bd-example-modal-lg" id="myModal1">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Add Banner</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form class="form-horizontal" action="{{route('admin.banner.insert')}}" method="POST" enctype="multipart/form-data">

					@csrf
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label text-right">Slider Link</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="ban_link" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label text-right">Slider Image</label>

						<div class="col-sm-8">
							<input type="file" name="pic" required>
							<p>(830px*355px)</p>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label text-right">Slider Bottom Image</label>

						<div class="col-sm-8">
							<input type="file" name="bottom_image" required>
							<p>(435px*175px)</p>
						</div>
					</div>

					<div class="form-group text-right">
						<input type="reset" value="Reset" class="btn btn-warning">
						<button type="submit" class="btn btn-blue">Submit</button>
					</div>
				</form>
			</div>

			<!-- Modal footer -->
			<!-- <div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div> -->

		</div>
	</div>
</div>
<!-- modal end -->

<!-- edit modal -->

<!-- edit modal start-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Update Banner</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" action="{{route('admin.banner.update')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label text-right">Ban Link</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="ban_link" id="ban_link">
							<input type="hidden" name="id" id="id">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label text-right">Image</label>

						<div class="col-sm-4">
							<input type="file" name="pic">
							<p>(830px*355px)</p>
						</div>
						<div class="col-sm-3" id="store-img">

						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label text-right"></label>
						<div class="col-sm-8" id="img">

						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label text-right">Slider Bottom Image</label>

						<div class="col-sm-8">
							<input type="file" name="bottom_image">
							<p>(435px*175px)</p>
						</div>
						<div class="col-sm-3" id="store-bottom-img">

						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label text-right"></label>
						<div class="col-sm-8" id="bottomimg">

						</div>
					</div>


					<div class="form-group text-right">
						<!-- <input type="" value="Reset" class="btn btn-warning"> -->
						<button type="button" class="btn btn-default" data-dismiss="modal" aria-label=""> Close</button>
						<button type="submit" class="btn btn-blue">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- edit modal end -->
<script type="text/javascript">
	$(document).ready(function() {

		$('#check_all').on('click', function(e) {

			if ($(this).is(':checked', true))

			{
				$(".checkbox").prop('checked', true);

			} else {

				$(".checkbox").prop('checked', false);

			}

		});

	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.editcat').on('click', function() {
			var ban_id = $(this).data('id');
			//alert(ban_id);

			if (ban_id) {
				$.ajax({
					url: "{{ url('/get/admin/banner/edit/') }}/" + ban_id,
					type: "GET",
					dataType: "json",
					success: function(data) {

						$("#ban_link").val(data.ban_link);
						$("#id").val(data.id);
						$("#img").html("<img src={{asset('')}}public/uploads/banner/" + data.ban_image + " height='70px'/>");
						$("#bottomimg").html("<img src={{asset('')}}public/uploads/banner/" + data.bottom_image + " height='70px'/>");

						$("#store-img").append("<input type='hidden' name='old_image' value='" + data.ban_image + "' />");
						$("#store-bottom-img").append("<input type='hidden' name='bottomimage' value='" + data.bottom_image + "' />");

					}
				});
			} else {
				alert('danger');
			}

		});
	});
</script>
@endsection
