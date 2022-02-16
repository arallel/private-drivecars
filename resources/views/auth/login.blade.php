<x-guest-layout>
    	
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
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="txt1">Register</a>
                        @endif
						</div>
                        <div>
                            @if (Route::has('password.request'))
                                <a class="txt1" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
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
</x-guest-layout>
