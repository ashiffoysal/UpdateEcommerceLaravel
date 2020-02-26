@extends('mobile.extra_master')
@section('page_content')
<!-- Begin Bar Nav -->
		<header class="bar bar-nav ">
			<a class="btn btn-link btn-nav pull-left" href="#" onclick="history.go(-1); return false;">
				<span class="icon icon-left-nav"></span>
			</a>
			<a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
				<span class="icon icon-bars"></span>
			</a>
			<h1 class="title">Transection Success</h1>
		</header>
		<!-- //End Bar Nav -->
		<div class="content">
      <div class="container">
			<!-- //Begin Main Content -->

							<div class="row">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><i class="fas fa-luggage-cart"></i>Payment Information</h4>
										</div>
										<div class="panel-body">
											<div class="table-responsive">
												<table class="table table-bordered">
													<thead>
														<tr>
															<td class="text-center"><span class="btn-success">Your Payment Has Been Success.Please check your email.Thank Tou!!<span></td>
														</tr>
													</thead>
												</table>
											</div>
										</div>
									</div>
								</div>

								<!--  -->


							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //End Main Content -->

			</div>
			<!-- //End Footer Content -->
		</div>


@endsection
