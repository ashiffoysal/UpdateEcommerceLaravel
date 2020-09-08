@extends('layouts.adminapp')
@section('admin_content')
		<div class="wrapper without_header_sidebar">
			<!-- contnet wrapper -->
			<div class="content_wrapper">
					<!-- page content -->
					<div class="login_page center_container" style="background: url('assets/images/inventory-bg.jpg');">
						<div class="center_content">
							<div class="logo">
								<!-- <img src="assets/images/logo.png" alt="" class="img-fluid"> -->
								<h3>RESET PASSWORD FORM</h3>
								<div class="admin">
									<span class="display-3 text-white"><i class="fas fa-lock"></i></span>
									<p class="text-left">Fill with your mail to receive instructions on how to reset your password.</p>
								</div>
							</div>
						
							  <form method="POST" action="{{ route('password.email') }}" class="d-block">
                                @csrf
								<div class="form-group icon_parent">
									<input type="email" placeholder="E-mail" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control bg-transparent border-0 pl-5">
									<span class="icon_soon_bottom_left"><i class="fas fa-envelope"></i></span>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-blue btn-block border-0">Forget Password</button>
								</div>
							</form>
							<div class="container">
								<div class="row">
									<div class="col-6 form-group">
										<a href="#" class="text-white fs-14">Login</a>
									</div>
									<div class="col-6 form-group">
										<a href="#" class="text-white fs-14 float-right">Create an account</a>
									</div>
								</div>
							</div>
							<div class="footer">
								<p>Copyright &copy; 2020 <a href="https://durbarit.com/">Durbar IT</a>. All rights reserved.</p>
							</div>
							
						</div>
					</div>
			</div><!--/ content wrapper -->
		</div><!--/ wrapper -->
	@endsection