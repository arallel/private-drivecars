<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Register</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>


	<!-- CSS Files -->
    <link href="auth/Register/css/bootstrap.min.css" rel="stylesheet" />
	<link href="auth/Register/css/paper-bootstrap-wizard.css" rel="stylesheet" />


	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="auth/Register/css/themify-icons.css" rel="stylesheet">
	</head>

	<body>
	<div class="image-container set-full-height" style="background-image: url('auth/Register/img/test.jpg')">
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="blue" id="wizardProfile">
		                    <form action="{{ route('register') }}" method="POST">
		                    @csrf
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Create your profile</h3>
									<p class="category">This information will let us know more about you.</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												About
											</a>
										</li>
			                            <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												Address
											</a>
										</li>
			                            <li>
											<a href="#account" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-settings"></i>
												</div>
												Work
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<h5 class="info-text"> Please tell us more about yourself.</h5>
											<div class="col-sm-4 col-sm-offset-1">
												<div class="picture-container">
													<div class="picture">
														<img src="auth/Register/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
														<input type="file" id="wizard-picture">
													</div>
													<h6>Choose Picture</h6>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Name <small>(required)</small></label>
													<input type="text"  @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" class="form-control" placeholder="Name" /> 

												</div>
												@error('name')
									            <div class="alert alert-danger text-white" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </div>   
								                @enderror 
												<div class="form-group">
													<label>Email <small>(required)</small></label>
													<input type="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" /> 
												</div>
												@error('email')
									            <div class="alert alert-danger text-white" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </div>   
								                @enderror 
											<!-- </div> -->
											<!-- <div class="col-sm-10 col-sm-offset-1"> -->
												<div class="form-group">
													<label>Password <small>(required)</small></label>
													<input type="password" @error('password') is-invalid @enderror name="password" class="form-control" placeholder="Password" /> 
                                                  @error('password')
									            <div class="alert alert-danger text-white" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </div>   
								                @enderror
												</div>
												<div class="form-group">
													<label>Confirm Password <small>(required)</small></label>
													<input type="password" @error('password_confirmation') is-invalid @enderror name="password_confirmation" class="form-control" placeholder="Confirm Password" />
													@error('password_confirmation')
									            <div class="alert alert-danger text-white" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </div>   
								                @enderror
								            </div>
										     </div>
									    </div>
		                            </div>
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> Proifle</h5>
		                                    </div>
		                                    <div class="col-sm-7 col-sm-offset-1">
		                                    	<div class="form-group">
		                                            <label>alamat</label>
		                                           <input type="text" value="{{ old('alamat') }}" @error('alamat') is-invalid @enderror name="alamat"  class="form-control" placeholder="alamat" /> 
		                                           @error('alamat')
									            <div class="alert alert-danger text-white" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </div>   
								                @enderror
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-3">
		                                        <div class="form-group">
		                                            <label>Tanggal lahir</label>
		                                            <input type="date" @error('tanggal_lahir') is-invalid @enderror name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"  class="form-control" placeholder="tanggal lahir" />
		                                            @error('tanggal_lahir')
									            <div class="alert alert-danger text-white" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </div>   
								                @enderror
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>Provinsi</label>
		                                            <input type="text" @error('provinsi') is-invalid @enderror name="provinsi" value="{{ old('provinsi') }}" class="form-control" placeholder="provinsi" />
		                                            @error('provinsi')
									            <div class="alert alert-danger text-white" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </div>   
								                @enderror
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                        <div class="form-group">
		                                            <label>Kabupaten</label>
		                                            <input type="text" @error('kabupaten') is-invalid @enderror name="kabupaten" value="{{ old('kabupaten') }}" class="form-control" placeholder="kabupaten" /> 
		                                            @error('kabupaten')
									            <div class="alert alert-danger text-white" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </div>   
								                @enderror
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-6 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>Kecamatan</label>
		                                            <input type="text" @error('kecamatan') is-invalid @enderror name="kecamatan" value="{{ old('kecamatan') }}" class="form-control" placeholder="kecamatan" /> 
		                                            @error('kecamatan')
									            <div class="alert alert-danger text-white" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </div>   
								                @enderror
		                                        </div>
		                                    </div>
		                            </div>
		                        </div>
		                            <div class="tab-pane" id="account">
		                                <h5 class="info-text">Profile </h5>                                 
		                                <div class="row"> 
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>Ktp</label>
		                                            <input type="text" @error('ktp') is-invalid @enderror name="ktp" value="{{ old('ktp') }}" class="form-control" placeholder="No Ktp" />
		                                            @error('ktp')
									            <div class="alert alert-danger text-white" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </div>   
								                @enderror
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                        <div class="form-group">
		                                            <label>Contact</label>
		                                            <input type="text" 
		                                            @error('contact') is-invalid @enderror name="contact" value="{{ old('contact') }}" class="form-control" placeholder="No hp" />
		                                            @error('')
									            <div class="alert alert-danger text-white" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </div>   
								                @enderror
		                                        </div>
		                                    </div>
		                                     <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>Gender</label>
		                                        <select class="form-control" value="{{ old('gender') }}" name="gender">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                                </select>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-info btn-wd' name='next' value='Next' />
		                               <button type="submit" class='btn btn-finish btn-fill btn-success btn-wd'>Submit</button>
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-warning btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	          
	        </div>
	    </div>
		
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="auth/Register/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="auth/Register/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="auth/Register/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="auth/Register/js/demo.js" type="text/javascript"></script>
	<script src="auth/Register/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="auth/Register/js/jquery.validate.min.js" type="text/javascript"></script>

</html>
