<div wire:poll.keep-alive>
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('auth/Register/img/test.jpg');">
        <span class="mask  opacity-6"></span>
      </div>
      <div class="card card-body mx-4 mx-md-8 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{ auth()->user()->name ?? user}}
              </h5>
                @if(auth()->user()->role == 0)
                  <p class="mb-0 font-weight-normal text-sm">Driver</p>
                @else
                  <p class="mb-0 font-weight-normal text-sm">Admin</p>
                @endif
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="material-icons text-lg position-relative">home</i>
                    <span class="ms-1">Profile</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="material-icons text-lg position-relative">settings</i>
                    <span class="ms-1">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
            <div class="col-13">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <h4 class="pb-2 border-bottom text-center">Account Setting</h4>
                  </div>
                </div>
                <div class="card-body p-3">
                  <form action="{{route('user-profile-information.update')}}" method="POST">
                   @csrf
                   @method('PUT')
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <div class="col-xl-12"> <label for="Name">Name</label>
                        <input type="text" @error('name') is-invalid @enderror name="name"  value="{{old('name') ?? auth()->user()->name}}" class="form-control" placeholder="Name">
                      </div>
                    </div>
                      @error('')
                      <div class="alert alert-danger text-white" role="alert">
                      <strong>{{ $message }}</strong>
                      </div>   
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <div class="col-xl-12"> <label for="Email">Email</label>
                        <input type="text" name="email" @error('email') is-invalid @enderror value="{{old('email') ?? auth()->user()->email}}" class="form-control" placeholder="">
                      </div>
                    </div>
                      @error('')
                      <div class="alert alert-danger text-white" role="alert">
                      <strong>{{ $message }}</strong>
                      </div>   
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <div class="col-xl-12"> <label for="Ktp">Ktp</label>
                        <input type="text" name="ktp" @error('ktp') is-invalid @enderror value="{{old('ktp') ?? auth()->user()->ktp}}" class="form-control">
                      </div>
                    </div>
                      @error('')
                      <div class="alert alert-danger text-white" role="alert">
                      <strong>{{ $message }}</strong>
                      </div>   
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <div class="col-xl-12"> <label for="Contact">Contact</label>
                        <input type="text" @error('contact') is-invalid @enderror name="contact" value="{{old('contact') ?? auth()->user()->contact}}" class="form-control">
                      </div>
                    </div>
                      @error('')
                      <div class="alert alert-danger text-white" role="alert">
                      <strong>{{ $message }}</strong>
                      </div>   
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <div class="col-xl-12"> <label for="Tanggal Lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" @error('tanggal_lahir') is-invalid @enderror value="{{old('tanggal_lahir') ?? auth()->user()->tanggal_lahir}}" class="form-control">
                      </div>
                    </div>
                      @error('')
                      <div class="alert alert-danger text-white" role="alert">
                      <strong>{{ $message }}</strong>
                      </div>   
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <div class="col-xl-12"> <label for="Gender">Gender</label>
                      <select name="gender" id="country" >
                    <option value="{{old('gender') ?? auth()->user()->gender}}" selected>{{old('gender') ?? auth()->user()->gender}}</option>
                    @if(auth()->user()->gender == 'Perempuan')                                    
                     {
                        <option value="Laki-Laki">Laki Laki</option>
                     }
                     @endif
                     @if(auth()->user()->gender == 'Laki-Laki')
                     {
                         <option value="Perempuan">Perempuan</option>
                     }
                     @endif
                </select>
                      </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <div class="col-xl-12"> <label for="Provinsi">Provinsi</label>
                        <input type="text" name="provinsi" @error('provinsi') is-invalid @enderror value="{{old('provinsi') ?? auth()->user()->provinsi}}" class="form-control">
                      </div>
                    </div>
                      @error('')
                      <div class="alert alert-danger text-white" role="alert">
                      <strong>{{ $message }}</strong>
                      </div>   
                      @enderror
                    </div>
                    <div class="col-md-6">
                       <div class="input-group input-group-outline my-3">
                        <div class="col-xl-12"> <label for="Kabupaten">Kabupaten</label>
                       <input type="text" name="kabupaten" @error('kabupaten') is-invalid @enderror  value="{{old('kabupaten') ?? auth()->user()->kabupaten}}" class="form-control">
                      </div>
                    </div>
                      @error('')
                      <div class="alert alert-danger text-white" role="alert">
                      <strong>{{ $message }}</strong>
                      </div>   
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <div class="col-xl-12"> <label for="Kecamatan">Kecamatan</label>
                        <input type="text" @error('kecamatan') is-invalid @enderror name="kecamatan" value="{{old('kecamatan') ?? auth()->user()->kecamatan}}" class="form-control">
                      </div>
                    </div>
                      @error('')
                      <div class="alert alert-danger text-white" role="alert">
                      <strong>{{ $message }}</strong>
                      </div>   
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <div class="col-xl-12"> <label for="alamat">alamat</label>
                        <input type="text" @error('alamat') is-invalid @enderror name="alamat"  value="{{old('alamat') ?? auth()->user()->alamat}}" class="form-control">
                      </div>
                    </div>
                      @error('')
                      <div class="alert alert-danger text-white" role="alert">
                      <strong>{{ $message }}</strong>
                      </div>   
                      @enderror
                    </div>
                  </div><br>
                  <div class="text-right">
                    <button  class="btn btn-info">Save Changes</button>
                  </div>
                  <hr class="horizontal gray-light my-4">
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
            <br>
            <div class="card card-body mx-4 mx-md-8 ">
            <div class="row">
            <div class="col-13">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <h4 class="pb-2 border-bottom text-center">Update Password</h4>
                  </div>
                </div>
                <div class="card-body p-3">
                  <form action="{{route('user-password.update')}}" method="POST">
                   @csrf
                   @method('PUT')
                  <div class="row">
                    <div class="col-md-5">  
                    <div class="input-group input-group-outline my-3">
                      <div class="col-xl-12"> <label for="current_password">Current Password</label> <input type="password" name="current_password"  class="form-control">
                    </div>
                   </div>
                   <div class="input-group input-group-outline my-3">
                      <div class="col-xl-12"> <label for="name">New Password</label> <input type="password" name="password" class="form-control" >
               </div>
                   </div>
                   <div class="input-group input-group-outline my-3">
                      <div class="col-xl-12"> <label for="name">Confirm Password</label> <input type="password" name="password_confirmation"  class="form-control ">
                   </div>
                   @error('')
                      <div class="alert alert-danger text-white" role="alert">
                      <strong>{{ $message }}</strong>
                      </div>   
                      @enderror
                  </div><br>
                  <div class="text-left">
                    <button  class="btn btn-info">Save Changes</button>
                  </div>
                  <hr class="horizontal gray-light my-4">
                  </div>
                  </form>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer py-4  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
          </div>  
        </div>
      </div>
    </footer>
  </div>
  </div>
</div>
</div>

