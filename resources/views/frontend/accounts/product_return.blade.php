@extends('layouts.websiteapp')
@section('main_content')
<!-- Main Container  -->
<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Return</a></li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-md-9">
				<h2 class="title">Product Returns</h2>
				<p>Please complete the form below to request product returns.</p>

				<form class="form-horizontal">
					<fieldset>
						<legend>Order Information</legend>
						<div class="form-group required">
							<label for="input-firstname" class="col-sm-2 control-label">First Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname">
							</div>
						</div>
						<div class="form-group required">
							<label for="input-lastname" class="col-sm-2 control-label">Last Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="" name="lastname">
							</div>
						</div>
						<div class="form-group required">
							<label for="input-email" class="col-sm-2 control-label">E-Mail</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
							</div>
						</div>
						<div class="form-group required">
							<label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="input-telephone" placeholder="Telephone" value="" name="telephone">
							</div>
						</div>
						<div class="form-group required">
							<label for="input-order-id" class="col-sm-2 control-label">Order ID</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="input-order-id" placeholder="Order ID" value="" name="order_id">
							</div>
						</div>
						<div class="form-group">
							<label for="input-date-ordered" class="col-sm-2 control-label">Order Date</label>
							<div class="col-sm-3">
								<div class="input-group date">
									<input type="text" class="form-control" id="input-date-ordered" data-date-format="YYYY-MM-DD" placeholder="Order Date" value="" name="date_ordered"><span class="input-group-btn">
							<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
							</span>
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Product Information</legend>
						<div class="form-group required">
							<label for="input-product" class="col-sm-2 control-label">Product Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="input-product" placeholder="Product Name" value="" name="product">
							</div>
						</div>
						<div class="form-group required">
							<label for="input-model" class="col-sm-2 control-label">Product Code</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="input-model" placeholder="Product Code" value="" name="model">
							</div>
						</div>
						<div class="form-group">
							<label for="input-quantity" class="col-sm-2 control-label">Quantity</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="input-quantity" placeholder="Quantity" value="1" name="quantity">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label">Reason for Return</label>
							<div class="col-sm-10">
								<div class="radio">
									<label>
										<input type="radio" value="1" name="return_reason_id"> Dead On Arrival</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" value="3" name="return_reason_id"> Order Error</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" value="2" name="return_reason_id"> Received Wrong Item</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" value="5" name="return_reason_id"> Other
									</label>
								</div>

							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label">Product is opened</label>
							<div class="col-sm-10">
								<label class="radio-inline">
									<input type="radio" value="1" name="opened"> Yes
								</label>
								<label class="radio-inline">
									<input type="radio" checked="checked" value="0" name="opened"> No
								</label>
							</div>
						</div>
						<div class="form-group">
							<label for="input-comment" class="col-sm-2 control-label">Other details</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="input-comment" placeholder="Other details" rows="10" name="comment"></textarea>
							</div>
						</div>
					</fieldset>
					<div class="buttons clearfix">
						<div class="pull-left"><a class="btn btn-default buttonGray">Back</a>
						</div>
						<div class="pull-right">
							<input type="submit" class="btn btn-primary" value="Submit">
						</div>
					</div>
				</form>


			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
	@include('frontend.include.account_sidebar.account_sidebar')
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->
@endsection
