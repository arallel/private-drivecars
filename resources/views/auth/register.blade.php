<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>Register</title>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
<script src="https://kit.fontawesome.com/8f35130a2a.js" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link rel="stylesheet" href="{{asset('reg/app.css')}}">
</head>
<body class='snippet-body'>
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Sign Up Your User Account</strong></h2>
                <p>Fill all form field to go to next step</p>

                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" action="{{ route('register') }}" method="POST">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li id="account"><strong> Account</strong></li>
                                <li id="personal"><strong>Personal</strong></li>
                                <li id="alamat"><strong>alamat</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Account Information</h2> 
									<input type="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" placeholder="Email" /> 
							@error('email')
							<div class="alert alert-danger mt-2">
								{{ $message }}
							</div>    
						@enderror
									<input type="text"  @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" placeholder="Nama" /> 
									@error('name')
								<div class="alert alert-danger mt-2">
									{{ $message }}
								</div>  
								@enderror 	
									<input type="password" @error('password') is-invalid @enderror name="password" placeholder="Password" /> 
									@error('password')
								<div class="alert alert-danger mt-2">
									{{ $message }}
								</div>    
							@enderror
									<input type="password" @error('password_confirmation') is-invalid @enderror name="password_confirmation" placeholder="Confirm Password" />
									@error('password_confirmation')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>    
								@enderror 
								</div> 
								 
							
							
							
								<input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2> 
									<input type="text" @error('ktp') is-invalid @enderror name="ktp" value="{{ old('ktp') }}" placeholder="No Ktp" /> 
                                    @error('ktp')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>    
								@enderror 
									<div class="row">
                                        <div class="col-9"> <select class="list-dt" id="month" value="{{ old('gender') }}" name="gender">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select> 
										</div>
                                    </div> <br>
									<input type="text" @error('contact') is-invalid @enderror name="contact" value="{{ old('contact') }}" placeholder="No hp" /> 
                                    @error('contact')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>    
								@enderror 
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">alamat Information</h2>
                                    <input type="text" @error('tempat_lahir') is-invalid @enderror value="{{ old('tempat_lahir') }}" name="tempat_lahir"  placeholder="tempat lahir" /> 
                                    @error('tempat_lahir')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>    
								@enderror 
                                 <input type="date" @error('tanggal_lahir') is-invalid @enderror name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"  placeholder="tanggal lahir" /> 
                                    @error('tanggal_lahir')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>    
								@enderror 
                                 <input type="text" @error('provinsi') is-invalid @enderror name="provinsi" value="{{ old('email') }}" placeholder="provinsi" /> 
                                    @error('provinsi')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>    
								@enderror 
                                 <input type="text" @error('kabupaten') is-invalid @enderror name="kabupaten" value="{{ old('kabupaten') }}" placeholder="kabupaten" /> 
                                    @error('kabupaten')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>    
								@enderror 
                                 <input type="text" @error('kecamatan') is-invalid @enderror name="kecamatan" value="{{ old('kecamatan') }}" placeholder="kecamatan" /> 
                                    @error('kecamatan')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>    
								@enderror 
                                 <input type="text" value="{{ old('alamat') }}" @error('alamat') is-invalid @enderror name="alamat"  placeholder="alamat" /> 
                                    @error('alamat')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>    
								@enderror 
                                </div>
								<input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <button class="next action-button">submit</button>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript' src=''></script>
<script type='text/javascript' src=''></script>
<script src="reg/app.js"></script>
</body>
</html>