<div class="container-fluid py-4">
<div wire:poll.keep-alive>
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
            <button wire:click="create()"
            class="btn btn-info">create</button> 
              <div class="table-responsive p-0">
               
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Merk Kendaraan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plat kendaraan</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Photo</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Qr code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <div>
                    @if ($c > 0)
                     @foreach ($cars as $car)
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
                    <td class="align-middle text-center"><button wire:click="show({{ $car->id }})"
                        class="btn btn-info"><i class="fa-solid fa-eye"></i></button> 
                        <button wire:click="edit({{$car->id}})"
                          class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                          <button wire:click="deleteConfirmation({{ $car->id }})"
                            class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                           <!--  <button type="button" class="btn bg-gradient-primary"wire:click="edit({{ $car->id }})">
                              view
                            </button> -->
                            
                    </td>
                </tr>
                      @endforeach
                      @else
                      <tr>
                        <td class="align-middle text-center" colspan="6" ><small>No Cars Found</small></td>
                       </tr>
                    @endif
                    </div>              
                   </tbody>
                   @if ($c > 0)
                   {{$cars->links()}}
                   @endif
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
  </main>
  <!-- Modal -->
<div wire:ignore.self class="modal fade" id="editcar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             <form wire:submit.prevent="update">
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-car icon"></i>
                    <input type="text" class="form-control" wire:model="merkkendaraan" >
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-palette icon"></i>
                    <input type="color" class="form-control" wire:model="warna" >
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-address-card icon"></i>
                    <input type="text" class="form-control" wire:model="nostnk" >
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-address-card icon"></i>
                    <input type="text" class="form-control" wire:model="nobpkb" >
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-car icon"></i>
                    <input type="text" class="form-control" wire:model="platmobil" >
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-gas-pump icon"></i>
                    <input type="text" class="form-control" wire:model="bahanbakar" >
                  </div>
                  </div>
                  <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary">Save  changes</button>
                </div>
                </form>      
            </div>
      
    </div>
  </div>
</div>
 
    <div class="modal fade" id="deletecar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modal-body pt-4 pb-4">
                    <h6>Are you sure? You want to delete this student data!</h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-danger" wire:click="delete()">Yes! Delete</button>
                </div>
      </div>
    </div>
  </div>
</div>

<!-- edit -->
<div wire:ignore.self class="modal fade" id="viewcar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Detail Kendaraan</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>image: </th>
                                <td><img class="test-popup-link" src="{{ asset('storage/' . $view_filecar) }}" width="150" height="100"></td> </td>
                            </tr>
                            <tr>
                                <th>merk: </th>
                                <td>{{ $view_merkkendaraan }}</td>
                            </tr>
                            <tr>
                                <th>merk: </th>
                                <td>{{ $view_merkkendaraan }}</td>
                            </tr>
                            <tr>
                                <th>Plat: </th>
                                <td>{{ $view_platmobil }}</td>
                            </tr>
                            <tr>
                                <th>Warna: </th>
                                <td>{{ $view_warna }}</td>
                            </tr>
                            <tr>
                                <th>No Bpkb: </th>
                                <td>{{ $view_nobpkb }}</td>
                            </tr>
                            <tr>
                                <th>No Stnk: </th>
                                <td>{{ $view_nostnk }}</td>
                            </tr>
                            <tr>
                                <th>Bahan Bakar: </th>
                                <td>{{ $view_bahanbakar }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn bg-gradient-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



@push('scripts')
    <script>
        window.addEventListener('close-modal', event =>{
            $('#viewcar').modal('hide');
             $('#editcar').modal('hide');
              $('#deletecar').modal('hide');

        });

        window.addEventListener('view-car', event =>{
            $('#viewcar').modal('show');
        });

        window.addEventListener('delete-car', event =>{
            $('#deletecar').modal('show');
        });

        window.addEventListener('edit-car', event =>{
            $('#editcar').modal('show');
        });
    </script>
@endpush