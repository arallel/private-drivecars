<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="auth/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="auth/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="auth/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/css/util.css">
	<link rel="stylesheet" type="text/css" href="auth/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<div class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-45">
						Login
					</span>
							<div class="card-body">
					@if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
							</div>
					
			
					</div>
			<form action="{{ route('login') }}" method="POST">
                @csrf

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is Required">
						<input class="input100" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					@error('email')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>    
				@enderror
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					@error('password')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>    
				@enderror
				   
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
                        
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
                           
						</div>

						<div>
							<a href="{{ url('register') }}" class="txt1">
								Register?
							</a>
						</div>
						<div>
							<a href="{{ url('forgot-password') }}" class="txt1">
								forgot your password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="auth/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="auth/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="auth/vendor/bootstrap/js/popper.js"></script>
	<script src="auth/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="auth/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="auth/vendor/daterangepicker/moment.min.js"></script>
	<script src="auth/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="auth/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="auth/js/main.js"></script>

</body>
</html>