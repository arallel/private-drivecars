<!doctype html>
<html lang="en">
  <head>
  	<title>peminjaman</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	</head>
	<body>
	{{-- <section class="ftco-section"> --}}
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">peminjaman</h2>
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
									<form action="{{ route('peminjaman.store') }}" method="POST" enctype="multipart/form-data"  class="contactForm">
											@csrf
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<span><strong>spedometer sebelum berangkat</strong></span>
													<input type="file" class="form-control" @error('spedometersudah') is-invalid @enderror name="spedometersblm" id="name" placeholder="spedometer sebelum berangkat">
												</div>
											</div>	
										  <div class="col-md-12">
												<div class="form-group">  
                    <label for="cars">Choose a car:</label><br>
                    <select name="kendaraan" id="cars">
											@foreach ($cars as $car)
   								  <option value="{{$car->id}}">{{$car->merkkendaraan}}</option>
   								   @endforeach
                    </select>
                    
                  			</div>
											</div>
											<div class="col-md-12">
												<div class="form-group ">
														<input type="text" name="tanggalkeberangkatan" value="" />
												</div>
											</div>
                         <div>
												<input type="hidden" name="pengguna" value="{{auth()->user()->id}}">
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<button type="submit" class="btn btn-primary">input</button>
												</div>
											</div>
											
										</div>
									</form>
										<a href="{{url('Dashboard')}}" class="btn btn btn-warning">back</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	{{-- </section> --}}
<!--   <script type="text/javascript">
  	
  </script>
 --> <script type="text/javascript">
 	$('input[name="tanggalkeberangkatan"]').daterangepicker();
$(function() {

  $('input[name="tanggalkeberangkatan"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="tanggalkeberangkatan"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="tanggalkeberangkatan"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});
</script>
	<script src={{ asset("auth/js/jquery.min.js") }}></script>
  <script src={{ asset("auth/js/popper.js") }}></script>
  <script src={{ asset("auth/js/bootstrap.min.js") }}></script>
  <script src={{ asset("auth/js/jquery.validate.min.js") }}></script>
  <script src={{ asset("auth/js/newmain.js") }}></script>

	</body>
</html>

