<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
   <script src="https://kit.fontawesome.com/8f35130a2a.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            {{-- <div class="col-md-3">
                <div class="text-center">
                    <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="form-control">
                </div>
            </div> --}}
            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i> Please fill in your personal data according to the identity card you have!</div>
                <h3>Personal info</h3>
                <form action="{{ Route('user-profile-information.update') }}" method="POST">
                    @csrf
                    @method('PUT')
        
                    <div class="form-group">
                        <label class="col-lg-3 control-label">No. Ktp:</label>
                        <div class="col-lg-8">
                            <input class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" type="text" placeholder="Nomer Ktp">
                            	
					@error('no_ktp')
                    <div class="alert alert-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                        </div>
                    </div>
                   <div class="form-group">
                        <label class="col-lg-3 control-label">Nama:</label>
                        <div class="col-lg-8">
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"value="{{auth()->user()->name }}">
                       	
					@error('name')
                    <div class="alert alert-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">email:</label>
                        <div class="col-lg-8">
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{auth()->user()->email }}">
                       	
					@error('email')
                    <div class="alert alert-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label class="col-lg-3 control-label">Jenis Kelamin:</label>
                        <div class="col-lg-8">
                            <div class="ui-select">
                                <select id="kelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Tempat/Tanggal Lahir:</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" value="">
                            <input type="date" class="form-control" value="tanggal_lahir">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Provinsi:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Kabupaten:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Kecamatan:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Alamat:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="password" value="">
                        </div>
                    </div>  --}}
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            {{-- <input type="reset" class="btn btn-default" value="Cancel"> --}}
                            <a href="{{ url()->previous() }}">back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
</body>
</html>