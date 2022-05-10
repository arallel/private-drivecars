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
            <div class="card-body px-0 pb-2">
            <button wire:click="create()"
            class="btn btn-info">create</button> 
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>

                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Merk Kendaraan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Warna</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plat kendaraan</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Photo</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Qr code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($cars as $car)
                    <tr>
                    <td class="text-secondary text-sm font-weight-bold">
                      <div class="d-flex px-3 py-1">{{ ++$i }}</div></td>
                    <td class="text-secondary text-xs font-weight-bold">{{ $car->merkkendaraan }}</td> 
                    <td class="align-middle text-center text-secondary text-xs font-weight-bold">{{ $car->warna }}</td>
                    <td class="align-middle text-center text-secondary text-xs font-weight-bold">{{ $car->platmobil }}</td>
                    <td class="align-middle text-center"> 
                        <img class="test-popup-link" src="{{ asset('storage/' . $car->filecar) }}" width="150" height="100"></td>  
                    </td>
                    <td class="align-middle text-center"><img src="data:image/png;base64,{!! base64_encode( QrCode::size(100)->format('png')->generate($car->id.$car->warna.$car->platmobil.$car->nostnk.$car->nobpkb.$car->merkkendaraan.$car->bahanbakar)) !!}">
                    </td>
                    <td class="align-middle text-center"><button wire:click="show({{ $car->id }})"
                        class="btn btn-info"><i class="fa-solid fa-eye"></i></button> 
                        <button wire:click="edit({{$car->id}})"
                          class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                          <button wire:click="delete({{ $car->id }})"
                            class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
              @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
  </main>
  @if($ModalOpen)
  @include('livewire.kendaraan.Detaildatakendaraan') 
  @endif
  @if($bukacreate)
  @include('livewire.kendaraan.inputdatakendaraan')
  @endif
  @if($bukaedit)
  @include('livewire.kendaraan.editdatakendaraan')
  @endif

