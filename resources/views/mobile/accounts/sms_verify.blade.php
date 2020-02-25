@extends('mobile.extra_master')
@section('page_content')
		<!-- Begin Bar Nav -->
		<header class="bar bar-nav ">
	<a class="btn btn-link btn-nav pull-left" href="{{ URL::previous() }}">
		<span class="icon icon-left-nav"></span>
	</a>
	<a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
		<span class="icon icon-bars"></span>
	</a>
	<h1 class="title">ACCOUNT VERIFICATION</h1>
</header>
<!-- //End Bar Nav -->
<div class="content">
<div class="container page-sitemap">
				<div class="row">
					<div id="content" class="col-xs-12">
						<div class="tab-account">
							<div class="icon-custom"></div>
							<ul class="nav nav-tabs segmented-control">
								<li class="active"><a class="platform-switch control-item active" data-toggle="tab" href="#home" aria-expanded="true">Verify Your Account </a> </li>
							</ul>

							<div class="tab-content">
								<div id="home" class="tab-pane form-login fade active in">


									<div class="well col-sm-12">

										<form action="{{route('mobile.login')}}" method="post" enctype="multipart/form-data">
										@csrf
											<div class="form-group form-user">
												<label class="control-label p-2" for="input-email">Places Enter Your Verification code Here: </label>
												<input type="text" name="email" value="" placeholder="Enter Your Verification code......." id="input-email" class="form-control">
											</div>
											
											<input type="submit" value="Submit" class="btn btn-primary pull-left">

										</form>

									


									</div>

								</div>
					

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
</div>

@endsection
