@extends('layouts.template')
@section('isi')
<style type="text/css">
    .badge-success {
    color: #339537;
    background-color: #bce2be;
}
.badge, .btn {
    text-transform: uppercase;
}
.badge {
    display: inline-block;
    padding: 0.55em 0.9em;
    font-size: .75em;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.45rem;
}
.badge-success {
    color: #339537;
    background-color: #bce2be;
}
.badge, .btn {
    text-transform: uppercase;
}
.badge-secondary {
    color: #575f8b;
    background-color: #d7d9e1;
}
.input-icons i {
    position: relative;
}

.input-icons {
width: 100%;
height: 50%;
margin-bottom: 10px;
        }
          
.icon {
padding: 10px;
min-width: 40px;
text-align: center;
        }
          
.input-field {
width: 100%;
padding: 10px;
text-align: left;
        } 
</style>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">user table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gender</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($users as $user)
                   <tr>
                    <td class="text-secondary text-sm font-weight-bold">
                      <div class="d-flex px-3 py-1">{{ $user->id }}</div></td>
                    <td class="text-secondary text-xs font-weight-bold">{{ $user->name }}</td> 
                    <td class="align-middle text-center text-secondary text-xs font-weight-bold">{{ $user->email }}</td>
                    <td class="align-middle text-center text-secondary text-xs font-weight-bold">{{ $user->gender }}</td>
                    <td class="align-middle text-center"> 
                      @if($user->status == 3)
                         <span class="badge badge-success">Active</span>
                      @else 
                       <span class="badge badge-secondary">Non Active</span>
                      @endif  
                    </td>
                    <td class="align-middle text-center">
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#Showmodal{{ $user->id }}">
                       <i class="fa-solid fa-eye text-right"></i>
                     </button> </td>
                      <!-- show modal -->
<div class="modal fade" id="Showmodal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Detail User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-user icon"></i>
                    <input type="text" class="form-control"name="name" value="{{$user->name}}" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-regular fa-envelope icon"></i>
                    <input type="text" class="form-control"name="email" value="{{ $user->email}}" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-venus-mars icon"></i>
                    <input type="text" class="form-control"name="gender" value="{{ $user->gender}}" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-phone icon"></i>
                    <input type="text" class="form-control"name="contact" value="{{ $user->contact}}" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-calendar-days icon"></i>
                    <input type="text" class="form-control"name="tanggal_lahir" value="{{ $user->tanggal_lahir}}" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-map-location-dot icon"></i>
                    <input type="text" class="form-control"name="provinsi" value="{{ $user->provinsi}}" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-map-location-dot icon"></i>
                    <input type="text" class="form-control"name="kabupaten" value="{{ $user->kabupaten}}" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-map-location-dot icon"></i>
                    <input type="text" class="form-control"name="kecamatan" value="{{ $user->kecamatan}}" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-location-dot icon"></i>
                    <input type="text" class="form-control"name="alamat" value="{{ $user->alamat}}" readonly>
                  </div>
                  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
     </form>  
    </div>
  </div>
</div>
                    </tr>
                    @empty
                       <tr>
                        <td class="align-middle text-center" colspan="6" ><small>No Cars Found</small></td>
                       </tr>  w
                     @endforelse
                     </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
  