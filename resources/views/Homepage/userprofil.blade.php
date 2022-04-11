<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="profileuser/main.css">
    <link rel="stylesheet" type="text/css" href="passwordcustom/css/passtrength.css"/>
    <script src="https://kit.fontawesome.com/8f35130a2a.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper bg-white mt-sm-5">
    <form action="{{route('user-profile-information.update')}}" method="POST">
    @csrf
    @method('PUT')  
     <h4 class="pb-4 border-bottom">Account settings</h4>
     <div class="d-flex align-items-start py-3 border-bottom">  
      <!--   @if(auth()->user()->profile_photo_path == 'default')
        <img src="profileuser/img/default.jpg" width="70" height="70">
        <img src="{{'storage/'}}" width="70" height="70">
     @endif -->
      <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
            <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
        </div>
    </div>
    <div class="py-2">
        <div class="row py-2">
            <div class="col-md-6"> <label for="name">Name</label> <input type="text" name="name"  value="{{old('name') ?? auth()->user()->name}}" class="bg-light form-control" placeholder=""> </div>
             <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" name="email" value="{{old('email') ?? auth()->user()->email}}" class="bg-light form-control" placeholder=""> </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6"> <label for="ktp">Ktp</label> <input type="text" name="ktp"  value="{{old('ktp') ?? auth()->user()->ktp}}" class="bg-light form-control">
            </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel" name="contact" value="{{old('contact') ?? auth()->user()->contact}}" class="bg-light form-control"> </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6"> <label for="gender">gender</label> <select name="gender" id="country" class="bg-light">
                    <option value="{{old('gender') ?? auth()->user()->gender}}" selected>{{old('gender') ?? auth()->user()->gender}}</option>
                    @if(auth()->user()->gender == 'perempuan')                                    
                     {
                        <option value="laki-laki">laki laki</option>
                     }
                     @endif
                     @if(auth()->user()->gender == 'laki-laki')
                     {
                         <option value="perempuan">perempuan</option>
                     }
                     @endif
                </select> </div>
              <div class="col-md-6"> <label for="tempat_lahir">tempat lahir</label> <input type="text" name="tempat_lahir"  value="{{old('tempat_lahir') ?? auth()->user()->tempat_lahir}}" class="bg-light form-control">
              </div> 
            </div>
        </div>
         <div class="row py-2">
            <div class="col-md-6"> <label for="tanggal_lahir">tanggal_lahir</label> <input type="date" name="tanggal_lahir"  value="{{old('tanggal_lahir') ?? auth()->user()->tanggal_lahir}}" class="bg-light form-control">
            </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="provinsi">provinsi</label> <input type="text" name="provinsi" value="{{old('provinsi') ?? auth()->user()->provinsi}}" class="bg-light form-control"> </div>
        </div>
         <div class="row py-2">
            <div class="col-md-6"> <label for="kabupaten">kabupaten</label> <input type="text" name="kabupaten"  value="{{old('kabupaten') ?? auth()->user()->kabupaten}}" class="bg-light form-control">
            </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="kecamatan">kecamatan</label> <input type="text" name="kecamatan" value="{{old('kecamatan') ?? auth()->user()->kecamatan}}" class="bg-light form-control"> </div>
        </div>
         <div class="row justify-content-center">
            <div class="col-md-6"> <label for="alamat">alamat</label> <input type="text" name="alamat"  value="{{old('alamat') ?? auth()->user()->alamat}}" class="bg-light form-control">
            </div>
            <!-- <div class="col-md-6 pt-md-0 pt-3"> <label for="alamat">alamat</label> <input type="text" name="alamat" value="{{old('alamat') ?? auth()->user()->alamat}}" class="bg-light form-control"> </div> -->
        </div><br>
        <div class="row justify-content-center"> <button type="submit" class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button">Cancel</button>
        </div>
        <br>
        <div class="d-sm-flex align-items-center pt-3 border-top" id="deactivate">
          <!--   <div> <b>Deactivate your account</b>
                <p>Details about your company account and password</p>
            </div>
            <div class="ml-auto"> <button class="btn danger">Deactivate</button> </div> -->
        </div>
  </form>  
    <!-- </div> -->
</div>
<div class="wrapper bg-white mt-sm-5">
    <form action="{{route('user-password.update')}}" method="POST">
        @csrf
        @method('PUT')
        <h4 class="pb-4 border-bottom">Update Password</h4>
         <div class="d-flex align-items-start py-3 border-bottom">
            <div class="py-2">
             <div class="row py-2">
               <div class="col-xl-12"> <label for="current_password">Current Password</label> <input type="password" name="current_password"  class="bg-light form-control" id="myPassword" >
               </div>
              </div>
             <div class="row py-2">
               <div class="col-xl-12"> <label for="name">New Password</label> <input type="password" name="password" class="bg-light form-control" >
               </div>
             </div>
              <div class="row py-2">
               <div class="col-xl-12"> <label for="name">Confirm Password</label> <input type="password" name="password_confirmation"  class="bg-light form-control ">
             </div>
        </div><br>
            <div class="row justify-content-center"> <button type="submit" class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button">Cancel</button>
            </div>
       </div>   
         </div>  
    </form>    
</div>


<div class="wrapper bg-white mt-sm-5">
   <h4 class="pb-4 border-bottom">Log Out Account</h4>
    <div class="d-flex align-items-start py-3 border-bottom">
         <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="btn btn-md btn-danger">
                        Logout
         </a> 
    </div>  
</div>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="profileuser/app.js"></script>
<script type="text/javascript" src="passwordcustom/js/jquery.passtrength.min.js"></script>
    <!--   <script type="text/javascript">
         function change()
         {
            var x = document.getElementById('pass').type;
 
            if (x == 'password')
            {
               document.getElementById('pass').type = 'text';
               document.getElementById('mybutton').innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
            }
            else
            {
               document.getElementById('pass').type = 'password';
               document.getElementById('mybutton').innerHTML = '<i class="fa-solid fa-eye"></i>';
            }
         }
      </script> -->
</body>
</html>