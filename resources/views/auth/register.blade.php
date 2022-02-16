<x-guest-layout>
 
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

</x-guest-layout>
