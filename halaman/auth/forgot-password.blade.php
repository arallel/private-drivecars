<!DOCTYPE html>
<html lang="en">
<head>
	<title>request email reset password</title>
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
				<div class="login100-form validate-form ">
					<span class="login100-form-title p-b-51">
						Reset Password
					</span>
 
                    <form action="{{ route('password.email') }}" method="POST">
						@csrf
					
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Email">
						<input class="input100" type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Place your email here">
						<span class="focus-input100"></span>
					
					@error('email')
                    <div class="alert alert-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
				</div>
						
					</div>

					<div class="container-login100-form-btn m-t-16">
						<button class="login100-form-btn">
							Send email verification
						</button>
					</div><br>

						<div>
							<a href="{{ url('login') }}" class="txt1">
								Login here
							</a>
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