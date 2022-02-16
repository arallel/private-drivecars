<x-guest-layout>
   	
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
	
</x-guest-layout>
