@extends('layouts.adminapp')
@section('admin_content')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- content wrpper -->
			<div class="content_wrapper">
				<!--middle content wrapper-->
				<div class="middle_content_wrapper">

				<section class="page_area">
					<div class="panel">
						<div class="panel_header">
							<div class="row">
								<div class="col-md-6">
									<div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Update Blog</span></div>
								</div>
								<div class="col-md-6 text-right">
									<button type="button"  style="margin: 5px;" class="btn btn-success" ><i class="fas fa-award"></i> <a href="{{route('admin.blog.all')}}" style="color: #fff;">All Blog</a></button>
								</div>
							</div>
						</div>
						<div class="panel_body">
						<form class="form-horizontal" action="{{route('admin.blog.update')}}" method="POST" enctype="multipart/form-data" >
						    @csrf
							 <div class="form-group row">
							    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Blog Title</label>
							    <div class="col-sm-6">
							      <input type="text" class="form-control" name="blog_title" value="{{ $data->blog_title }}">
							      <input type="hidden" name="id" value="{{ $data->id }}">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Blog Details</label>
							    <div class="col-sm-6">
							      <textarea class="form-control" name="description" id="editor1" rows="10" cols="80">{{ $data->description }}</textarea> 
							  		
							    </div>
							  </div>
							   <div class="form-group row">
							    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Image:</label>
							    <div class="col-sm-6">
							      <input type="file" name="pic">
							  		 <p>(1170px*855px)</p>
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="inputEmail3" class="col-sm-3 col-form-label text-right"></label>
							    <div class="col-sm-6">
							      <img src="{{ asset('public/uploads/blog/'.$data->image) }}" height="45px" width="45px">
							      <input type="hidden" name="old_image" value="{{ $data->image }}">
							    </div>
							  </div>
								
						    <div class="form-group text-center">

						    	<button type="submit" class="btn btn-blue">Update Blog</button>
						    </div>

							</form>

						</div>
					</div>
				</section>
			</div><!--/middle content wrapper-->
			</div><!--/ content wrapper -->



@endsection
