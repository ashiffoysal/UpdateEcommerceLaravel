@extends('mobile.extra_master')
@section('page_content')
		<!-- Begin Bar Nav -->
		<header class="bar bar-nav ">
	<a class="btn btn-link btn-nav pull-left" href="{{ url('/') }}">
		<span class="icon icon-left-nav"></span>
	</a>
	<a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
		<span class="icon icon-bars"></span>
	</a>
	<h1 class="title">Forgot Password</h1>
</header>
<!-- //End Bar Nav -->
<div class="content">
<div class="container page-sitemap">
				<div class="row">
					<div id="content" class="col-xs-12">
						<div class="tab-account">
							<div class="tab-content">
								<div id="home" class="tab-pane form-login fade active in">
                                    @if (Session::has('errorMsg'))
                                        <div style="margin-left:20px;" class="alert-danger text-center">{{ session('errorMsg') }}</div>
                                    @endif
									<div class="well col-sm-12">
										<h2 class="hidden">Returning Customer</h2>
										<p class="hidden"><strong>I am a returning customer</strong>
										</p>
										<form action="{{route('mobile.forget.password.email')}}" method="post">
										@csrf
											<div class="form-group form-user">
												<label class="control-label font-ct" for="input-email">E-Mail Address</label>
                                            <input type="text" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" id="input-email" class="form-control">
                                            <div class="text-danger text-center d-block">{{ $errors->first('email') }}</div>
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

@endsection
