<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Pegawai</title>
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
	
	<div class="container">
        <div class="row justify-content-center">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-150">
				<div class="login100-form validate-form ">
                    <form action="{{ route('register') }}" method="POST">
						@csrf
					<span class="login100-form-title p-b-51">
						register
					</span>
                    
                    <div class="col-md-25">
                        <div class="form-group">
					    <div class="wrap-input100 validate-input m-b-16" data-validate = "Name is required">
						<input class="input100" type="text" @error('name') is-invalid @enderror name="name" placeholder="Name">
						<span class="focus-input100"></span>
					</div>
                    </div>
                    </div>
						@error('name')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>    
				@enderror
                   
                    <div class="col-md-25">
                        <div class="form-group">
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="email" @error('email') is-invalid @enderror name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
                    </div>
                   </div>
				   @error('email')
				   <div class="alert alert-danger mt-2">
					   {{ $message }}
				   </div>    
			   @enderror
                   <div class="col-md-25">
                    <div class="form-group">
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password"  name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
                </div>
            </div>

            <div class="col-md-25">
                <div class="form-group">
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" @error('password_confirmation') is-invalid @enderror name="password_confirmation" placeholder="confirm password">
						<span class="focus-input100"></span>
					</div>
                </div>
            </div>
			@error('password_confirmation')
			<div class="alert alert-danger mt-2">
				{{ $message }}
			</div>    
		@enderror
					
				

						<div>
							<a href="{{ url('login') }}" class="txt1">
								have account? login here
							</a>
						</div>
					

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Register
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