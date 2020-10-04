@extends('layouts.adminapp')
@section('admin_content')
        <div class="wrapper without_header_sidebar">
            <div class="content_wrapper">
                    @php
                        $backgroungimage= DB::table('logos')->first();
                    @endphp
                    <div class="login_page center_container" style="background:#000);">
                        <div class="center_content">
                            <div class="logo">
                                <h3>LOGIN TO YOUR ACCOUNT</h3>
                              
                                <div class="admin">
                                <span class="display-3 text-white"><i class="fas fa-key"></i></span>
                                <p class="text-left">Fill with your mail to receive instructions on how to reset your password.</p>
                            </div>
                            </div>
                            <form method="POST" action="{{ route('admin.login') }}" class="d-block">
                               @csrf
                                <div class="form-group icon_parent">
                                    <input type="email" placeholder="E-mail" id="email" class="form-control bg-transparent border-0 pl-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="">
                                    <span class="icon_soon_bottom_left"><i class="fas fa-envelope"></i></span>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group icon_parent">
                                    <input type="password" id="password" class="form-control bg-transparent border-0 pl-5 @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"" placeholder="Password" required="">
                                    <span class="icon_soon_bottom_left"><i class="fas fa-unlock"></i></span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-6 form-group">
                                        <label class="chech_container fs-14">Remember me
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="checkmark bg-transparent"></span>
                                        </label>
                                    </div>
                                    <div class="col-6 form-group">
                                        <a href="{{ route('admin.password.request') }}" class="text-white fs-14 float-right">Forget Password</a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-blue btn-block border-0">Login</button>
                                </div>
                            </form>
                            <div class="footer">
                                <p>Copyright &copy; 2019 <a href="https://durbarit.com/">Durbar IT</a>. All rights reserved.</p>
                            </div>                    
                        </div>
                    </div>
            </div>
        </div>
@endsection
