<div class="content">
    <div wire:poll.keep-alive>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
            <h4 class="card-title text-center"> Cars Table</h4>
          </div>
          <button wire:click="create()"
            class="btn btn-info">create</button>
          @if($bukacreate)
            @include('livewire.detail.inputcar')
          @endif
          @if($ModalOpen)
          @include('livewire.detail.detailkendaraan')
          @endif
          @if($bukaedit)
          @include('livewire.detail.editcar')
          @endif
          <?php $i = 0; ?>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                    <th>No</th>
                    <th>Merk Kendaraan</th>
                    <th>Warna</th>
                    <th class="text-center">Plat kendaraan</th>
                    <th class="text-center">Photo</th>
                    <th>Qr code</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($cars as $car)
                  <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $car->merkkendaraan }}</td> 
                      <td>{{ $car->warna }}</td>
                      <td class="text-center">{{ $car->platmobil }}</td>
                      <td class="text-center"><img class="test-popup-link" src="{{ asset('storage/' . $car->filecar) }}" width="150" height="100"></td>
                      <td><img src="data:image/png;base64,{!! base64_encode( QrCode::size(100)->format('png')->generate($car->id.$car->warna.$car->platmobil.$car->nostnk.$car->nobpkb.$car->merkkendaraan.$car->bahanbakar)) !!}"></td>
                      
                      <td><button wire:click="show({{ $car->id }})"
                        class="btn btn-infonew"><i class="fa-solid fa-eye"></i></button> 
                        <button wire:click="edit({{$car->id}})"
                          class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                          <button wire:click="delete({{ $car->id }})"
                            class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                      </td>
                      <script>
                        $(document).ready(function() {
                        $('.image-link').magnificPopup({type:'image'});
                        });
                      </script>
                      <script>
                        $('.test-popup-link').magnificPopup({
                         type: 'image'
                        // other options
                      });</script>
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
    