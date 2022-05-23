<!doctype html>
<html lang="en">
  <head>
  	<title>Laporan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">
	{{-- <link rel="stylesheet" type="text/css" href="auth/css/laporan.css"> --}}

	</head>
	<body>
	{{-- <section class="ftco-section"> --}}
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Laporan</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row justify-content-center">
							<div class="col-lg-8 mb-5">
								<div class="row">
									<div class="col-md-4">
										<div class="dbox w-100 text-center">
					        	
					          </div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="contact-wrap">
									
									{{-- <div id="form-message-warning" class="mb-4 w-100 text-center"></div>  --}}
									<form action="{{ Route('laporanuser.store') }}" method="POST" enctype="multipart/form-data"  class="contactForm">
											@csrf
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<span><strong>spedometer sebelum berangkat</strong></span>
													<input type="file" class="form-control" name="spedometersblm" @error('spdeometersblm') is-invalid @enderror id="name" placeholder="spedometersblm">
												</div>
												@error('spdeometersblm')
												<div class="alert alert-danger mt-2">
													Tolong masukan spedometer 
												</div>    
											  @enderror
											</div>
                                             <div class="col-md-12">
												<div class="form-group">
													<span><strong>spedometer setelah berangkat</strong></span>
													<input type="file" class="form-control" @error('spedometersudah') is-invalid @enderror name="spedometersudah" id="name" placeholder="spedometersudah">
												</div>
											</div>
											@error('spedometersudah')
											<div class="alert alert-danger mt-2">
												Tolong masukan spedometer 
											</div>    
										  @enderror
                                           <div class="col-md-12">
												<div class="form-group">
													<span><strong>keterangan</strong></span>
													<textarea name="keterangan" @error('keterangan') is-invalid @enderror class="form-control" id="message" cols="30" rows="8" placeholder="Keterangan"></textarea>
												</div>
											</div>
											@error('keterangan')
											<div class="alert alert-danger mt-2">
												Tolong masukan Keterangan
											</div>    
										  @enderror
                       <div class="col-md-12">
												<div class="form-group">
													<span><strong>user id</strong></span>
													<input type="text" class="form-control" @error('user_id') is-invalid @enderror name="user_id" id="name" value="{{ auth()->user()->id}}">
												</div>
											</div>
											@error('user_id')
											<div class="alert alert-danger mt-2">
												Tolong masukan Tanggal Berangkat Kendaraan
											</div>    
										  @enderror
											<div class="col-md-12"> 
												<div class="form-group">
													<span><strong>tanggal penggunaan</strong></span>
													<input type="date" class="form-control" @error('tanggalpenggunaan') is-invalid @enderror name="tanggalpenggunaan" id="name" placeholder="date">
												</div>
											</div>
											@error('tanggalpenggunaan')
											<div class="alert alert-danger mt-2">
												Tolong masukan Tanggal Kembali Kendaraan
											</div>    
										  @enderror
											<div class="col-md-12">
												<div class="form-group">
													<span><strong>total jarak yang di tempuh</strong></span>
													<input type="text" class="form-control" @error('totalkm') is-invalid @enderror name="totalkm" id="subject" placeholder="total km">
												</div>
											</div>
											@error('totalkm')
											<div class="alert alert-danger mt-2">
												Tolong masukan total KM
											</div>    
										  @enderror
											<div class="col-md-12">
												<div class="form-group">
													<span><strong>total Liter bensin yang digunakan</strong></span>
													<input type="text" class="form-control" @error('liter') is-invalid @enderror name="liter" id="subject" placeholder="liter">
												</div>
											</div>
											@error('liter')
											<div class="alert alert-danger mt-2">
											  Tolong masukan total Liter
											</div>    
										  @enderror
											<div class="col-md-12">
												<div class="form-group">
													<button type="submit" class="btn btn-primary">input</button>
	                        
												</div>
											</div>
										</div>
									</form>
										<a href="{{url('homepage')}}" class="btn btn btn-warning">back</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	{{-- </section> --}}

	<script src={{ asset("auth/js/jquery.min.js") }}></script>
  <script src={{ asset("auth/js/popper.js") }}></script>
  <script src={{ asset("auth/js/bootstrap.min.js") }}></script>
  <script src={{ asset("auth/js/jquery.validate.min.js") }}></script>
  <script src={{ asset("auth/js/newmain.js") }}></script>

	</body>
</html>

