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
                <h6 class="text-white text-capitalize ps-3">Cars table</h6>
              </div>
            </div>
            <?php $i = 0; ?>
            <?php $c = $cars->count() > 0?>
            <div class="card-body px-3 pb-2">
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#createmodal">
               Create
             </button> 
              <div class="table-responsive p-0">
               
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Merk Kendaraan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plat kendaraan</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Photo</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Qr code</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Available</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <div>
                    @if ($c > 0)
                    @forelse ($cars as $car)
                    <tr>
                    <td class="text-secondary text-sm font-weight-bold">
                      <div class="d-flex px-3 py-1">{{ ++$i }}</div></td>
                    <td class="text-secondary text-xs font-weight-bold">{{ $car->merkkendaraan }}</td> 
                    <td class="align-middle text-center text-secondary text-xs font-weight-bold">{{ $car->platmobil }}</td>
                    <td class="align-middle text-center"> 
                        <img class="test-popup-link" src="{{ asset('storage/' . $car->filecar) }}" width="150" height="100"></td>  
                    </td>
                    <td class="align-middle text-center">
                       {!! QrCode::size(100)->generate($car->id.$car->warna.$car->platmobil.$car->nostnk.$car->nobpkb.$car->merkkendaraan.$car->bahanbakar); !!}
                    </td>
                    <td class="align-middle text-center"><span class="badge badge-success">available</span>
                    </td>
                    <td class="align-middle text-center">
                     <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#Showmodal{{ $car->id }}">
                       detail
                     </button> 
                     <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#Editmodal{{ $car->id }}">
                       edit
                     </button> 
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#Deletemodal{{ $car->id }}">
                     Delete
                     </button>    
                     </td>
                      </tr>
                      <!-- Edit input -->
<div class="modal fade" id="Editmodal{{$car->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Edit Car</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('update.kendaraan',$car->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-car icon"></i>
                    <input type="text" placeholder="Merk kendaraan"  @error('merkkendaraan') is-invalid @enderror class="form-control" value="{{$car->merkkendaraan}}" name="merkkendaraan">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-car icon"></i>
                    <input type="text" placeholder="Plat kendaraan"  @error('platmobil') is-invalid @enderror class="form-control" value="{{$car->platmobil}}"  name="platmobil">               </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                    <i class="fa-solid fa-palette icon"></i>
                    <input type="color" placeholder="Warna" 
                    @error('warna') is-invalid @enderror class="form-control" value="{{$car->warna}}"  name="warna">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-address-card icon"></i>
                    <input type="text" placeholder="stnk"  
                    @error('nostnk') is-invalid @enderror class="form-control" value="{{$car->nostnk}}"  name="nostnk">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                    <i class="fa-solid fa-address-card icon"></i>
                    <input type="text" placeholder="Bpkb"  
                    @error('nobpkb') is-invalid @enderror class="form-control" value="{{$car->nobpkb}}"  name="nobpkb">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-gas-pump icon"></i>
                    <input type="text" placeholder="total bahan bakar"  @error('bahanbakar') is-invalid @enderror class="form-control" value="{{$car->bahanbakar}}"  name="bahanbakar">
                  </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             
                @csrf
                @method('put')
            <button type="submit" class="btn btn-info">update</button>
      </div>
     </form>  
    </div>
  </div>
</div>
<!-- show modal -->
<div class="modal fade" id="Showmodal{{$car->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Detail Car</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-car icon"></i>
                    <input type="text" placeholder="Merk kendaraan"  @error('merkkendaraan') is-invalid @enderror class="form-control" value="{{$car->merkkendaraan}}" name="merkkendaraan">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-car icon"></i>
                    <input type="text" placeholder="Plat kendaraan"  @error('platmobil') is-invalid @enderror class="form-control" value="{{$car->platmobil}}"  name="platmobil">               </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                    <i class="fa-solid fa-palette icon"></i>
                    <input type="color" placeholder="Warna" 
                    @error('warna') is-invalid @enderror class="form-control" value="{{$car->warna}}"  name="warna">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-address-card icon"></i>
                    <input type="text" placeholder="stnk"  
                    @error('nostnk') is-invalid @enderror class="form-control" value="{{$car->nostnk}}"  name="nostnk">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                    <i class="fa-solid fa-address-card icon"></i>
                    <input type="text" placeholder="Bpkb"  
                    @error('nobpkb') is-invalid @enderror class="form-control" value="{{$car->nobpkb}}"  name="nobpkb">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-gas-pump icon"></i>
                    <input type="text" placeholder="total bahan bakar"  @error('bahanbakar') is-invalid @enderror class="form-control" value="{{$car->bahanbakar}}"  name="bahanbakar">
                  </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
     </form>  
    </div>
  </div>
</div>
                      <div class="modal fade" id="Deletemodal{{ $car->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                             <div class="modal-body">
                              <h5>Are you sure to delete this data?</h5>
                              <h6>{{$car->id}}</h6>
                             </div>
                             <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form action="{{route('delete.kendaraan',$car->id)}}" method="POST">
                                  @csrf
                                  @method('delete')
                              <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                             </div>
                           </div>
                         </div>
                      </div>
                      @empty
                        <tr>
                        <td class="align-middle text-center" colspan="6" ><small>No Cars Found</small></td>
                       </tr>
                       <!-- Modal -->
                     @endforelse
                     @endif
                    </div>              
                   </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
  </main>
  
  <!-- Modal input -->
<div class="modal fade" id="createmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Input Car</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('input.datakendaraan')}}" method="POST" enctype="multipart/form-data">
            @csrf
           <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                    <i class="fa-solid fa-upload icon"></i>
                    <input type="file" class="form-control" name="filecar">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-car icon"></i>
                    <input type="text" placeholder="Merk kendaraan"  @error('merkkendaraan') is-invalid @enderror class="form-control" name="merkkendaraan">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-car icon"></i>
                    <input type="text" placeholder="Plat kendaraan"  @error('platmobil') is-invalid @enderror class="form-control" name="platmobil">               </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                    <i class="fa-solid fa-palette icon"></i>
                    <input type="color" placeholder="Warna" 
                    @error('warna') is-invalid @enderror class="form-control" name="warna">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-address-card icon"></i>
                    <input type="text" placeholder="stnk"  
                    @error('nostnk') is-invalid @enderror class="form-control" name="nostnk">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                    <i class="fa-solid fa-address-card icon"></i>
                    <input type="text" placeholder="Bpkb"  
                    @error('nobpkb') is-invalid @enderror class="form-control" name="nobpkb">
                  </div>
            </div>
            <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-gas-pump icon"></i>
                    <input type="text" placeholder="total bahan bakar"  @error('bahanbakar') is-invalid @enderror class="form-control" name="bahanbakar">
                  </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Save changes</button>
      </div>
     </form>  
    </div>
  </div>
</div>



<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

<script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
@endsection