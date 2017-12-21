@extends('layouts.app') @extends("layout.partials.master") @section('maincontent')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default" style="border-color: #ddd;
    border: none;    background-color: #f6f6f6;">
				<div class="modal-content" style="
        height: 85vh !important;
        border-radius: 0px !important;
        /* margin-top: 10vh; */
        border: none;
        background: #f6f6f6;
                ">
					<div class="modal-header text-center">
						
						<h2 class="modal-title" id="myModalLabel">SIGN IN OR SIGN UP</h2>

					</div>

					{{-- Sign in Form --}}
					<div class="modal-body" id="sign-in-form">

						<div class="form-group modal-login-form">
							@if(count($errors) > 0)
                                @foreach($errors->all() as $error)
						        	<div class="alert alert-danger">{{$error}}</div>
							    @endforeach
                             @endif
							<form id="login-form" role="form" method="POST" action="{{ url('/login') }}">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="email">EMAIL</label>
									<input type="text" class="form-control" name="email" id="email" placeholder="Email">
								</div>
								<div class="form-group password-forgot">
									<label for="password">PASSWORD</label>
									<input type="password" class="form-control" name="password" id="password" placeholder="Password">
								</div>

								<div class="form-group">
									<a href="{{ route('password.request') }}" class="pass-forgot"> FORGOT PASSWORD </a>
								</div>
								<div class="form-group text-center btn-sign-in">
									<a class="btn btn-defualt">
										<span>Sign IN</span>
									</a>
								</div>
								<div class="form-group text-center btn-facbook">
									<a href="{{ url('/auth/facebook') }}" class="btn btn-defualt">
										<i class="fa fa-facebook text-center"></i>
										<span class="text-center">continue with facebook</span>
									</a>
								</div>
								<div class="form-group text-center">
									<a href="{{ url('/auth/google') }}" class="btn btn-defualt button-google">
										<img class="text-center" height="17px" width="auto" src="{{asset('assets/icons/google-icon.jpg')}}">
										<span class="text-center">continue with GOOGLE</span>
									</a>
								</div>

								<div class="form-group text-center div-sign-up">
									<span class="new-sign-up">NEW MEMBER ?
										<a class="sign-up" href="#sign-up-form"> SIGN UP</a>
									</span>
								</div>

							</form>

						</div>

					</div>


					{{-- Sign Up Form --}}
					<div class="modal-body" id="sign-up-form" hidden>

						<div class="form-group modal-login-form">

							<form id="login-form" role="form" method="POST" action="{{ url('/register') }}">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="email">EMAIL</label>
									<input type="text" class="form-control" id="email" placeholder="Email">
								</div>
								<div class="form-group password-forgot">
									<label for="password">PASSWORD</label>
									<input type="password" class="form-control" id="password" placeholder="Password">
								</div>
								<div class="form-group password-forgot pass-conform">
									<label for="password_confirmation">PASSWORD CONFIRMATION</label>
									<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password">
								</div>

								<div class="form-group text-center btn-sign-in">
									<a class="btn btn-defualt">
										<span>Sign UP</span>
									</a>
								</div>
								<div class="form-group text-center btn-facbook">
									<a href="{{ url('/auth/facebook') }}" class="btn btn-defualt">
										<i class="fa fa-facebook text-center"></i>
										<span class="text-center">continue with facebook</span>
									</a>
								</div>
								<div class="form-group text-center">
									<a href="{{ url('/auth/google') }}" class="btn btn-defualt button-google">
										<img class="text-center" height="17px" width="auto" src="{{asset('assets/icons/google-icon.jpg')}}">
										<span class="text-center">continue with GOOGLE</span>
									</a>
								</div>

								<div class="form-group text-center div-sign-up">
									<span class="new-sign-up">A MEMBER ?
										<a  class="sign-up" href="#sign-in-form"> SIGN IN</a>
									</span>
								</div>

							</form>

						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection