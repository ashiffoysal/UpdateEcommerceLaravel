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
									<div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>update Category</span></div>
								</div>
								<div class="col-md-6 text-right">
									<button type="button"  style="margin: 5px;" class="btn btn-success" ><i class="fas fa-award"></i> <a href="{{route('admin.category.all')}}" style="color: #fff;">All Category</a></button>
								</div>
							</div>
						</div>
						<div class="panel_body">
						<form class="form-horizontal" action="{{route('admin.category.update')}}" method="POST" enctype="multipart/form-data" >
						          	@csrf
									 <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Category Name:</label>
									    <div class="col-sm-6">
									      <input type="text" class="form-control" name="cate_name" required value="{{$data->cate_name}}">
									      <input type="hidden" name="id" value="{{$data->id}}">
									    </div>
									  </div>
									  <div class="form-group row">
					                <label for="example-text-input" class="col-sm-3 col-form-label text-right">Category Slug</label>
					                <div class="col-sm-6">
					                   <input class="form-control" type="text" name="cate_slug" value="{{$data->cate_slug}}">
					                   <p style="font-size: 11px">(If you leave it blank, it will be generated automatically)</p>
					                </div>
						         </div>
									  <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Image:</label>
									    <div class="col-sm-6">
									      <input type="file" name="pic">
									  		 <p>(270px*270px)</p>
									    </div>
									  </div>
                    <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right"></label>
									    <div class="col-sm-6">
									      <img src="{{asset('public/uploads/category/'.$data->cate_image)}}" height="150px" width="200px">
									    </div>
									  </div>
									  <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Icon:</label>

									    <div class="col-sm-6">
									      <input type="file" name="icon">
									      <p>(20px*20px)</p>
									    </div>
									  </div>

                    <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right"></label>
									    <div class="col-sm-6">
									      <img src="{{asset('public/uploads/category/'.$data->cate_icon)}}" height="70px" width="70px">
									    </div>
									  </div>

									  <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Choich Section</label>
									    <div class="col-sm-8 row">
									     <div class="col-md-8">
									     	<input type="radio" name="section_id" value="1" @if($data->section_id==1) checked @else @endif>
									     	<img src="{{asset('public/adminpanel')}}/Capture.PNG" alt="asif" height="70px" width="150px">
									     </div>
									     <br>
									     <br>
									     <br>
									     <div class="col-md-8">
									     	<input type="radio" name="section_id" value="2" id="check_img" class="check_img" @if($data->section_id==2) checked @else @endif>
									     	<img src="{{asset('public/adminpanel')}}/Capture2.PNG" alt="asif" height="70px" width="150px">
									     </div>
									     <br>
									     <br>
									     <br>
									     <div class="col-md-8">
									     	<input type="radio" name="section_id" value="3"  id="check_img" class="check_img" @if($data->section_id==3) checked @else @endif>
									     	<img src="{{asset('public/adminpanel')}}/Capture3.PNG" alt="asif" height="70px" width="150px">
									     </div>
									     <br>
									     <br>
									     <br>
									     <div class="col-md-8">
									     	<input type="radio" name="section_id" value="4" @if($data->section_id==4) checked @else @endif>
									     	<img src="{{asset('public/adminpanel')}}/Capture4.PNG" alt="asif" height="70px" width="150px">
									     </div>
									     <div class="col-md-8">
									     	<input type="radio" name="section_id" value="5" @if($data->section_id==5) checked @else @endif>
									     	<img src="{{asset('public/adminpanel')}}/Capture5.PNG" alt="asif" height="70px" width="150px">
									     </div>
									     <br>
									     <br>
									     <br>
									    </div>
									  </div>

									  <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Tag:</label>
									    <div class="col-sm-6">
									      <input type="text" name="tag" class="form-control" value="{{$data->cate_tag}}">
									    </div>
									  </div>
								    <div class="form-group text-center">

								    	<button type="submit" class="btn btn-blue">Add Category</button>
								    </div>

							</form>

						</div>
					</div>
				</section>
			</div><!--/middle content wrapper-->
			</div><!--/ content wrapper -->



@endsection
