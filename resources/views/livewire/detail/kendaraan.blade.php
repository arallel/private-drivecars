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
                      <td class="text-center"><img src="{{ asset('storage/' . $car->filecar) }}" width="150" height="100"></td>
                      <td><img src="data:image/png;base64,{!! base64_encode( QrCode::size(100)->format('png')->generate($car->id.$car->warna.$car->platmobil.$car->nostnk.$car->nobpkb.$car->merkkendaraan.$car->bahanbakar)) !!}"></td>
                      {{-- <td>{!! QrCode::size(100)->format('svg')->generate($car->id.$car->warna.$car->platmobil.$car->nostnk.$car->nobpkb.$car->merkkendaraan.$car->bahanbakar)  !!} </td> --}}
                       {{-- <td><div class="test"></div></td> --}}
                      <td><button wire:click="show({{ $car->id }})"
                        class="btn btn-info"><i class="fa-solid fa-eye"></i></button> 
                        <button wire:click="edit({{ $car->id }})"
                          class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                          <button wire:click="delete({{ $car->id }})"
                            class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                      </td>
                      {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" 
                      integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" 
                      crossorigin="anonymous"></script>
                      <script src="{{ asset('qrcode/dist/jquery-qrcode.js') }}"></script>
                      <script>
                          $(".test").qrcode({
                          
                          // 0: normal
                          // 1: label strip
                          // 2: label box
                          mode: 1,
                          text:'{{ $car->merkkendaraan }}',
                          size: 150,
                          label: '{{ $car->merkkendaraan }}',
                          fontname: 'sans',
                          fontcolor: '#000'
                          
                          });;</script> --}}
                  </tr>            @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> 
    </div> 
    </div>
    