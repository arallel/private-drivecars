<div class="content">
    <div wire:poll.keep-alive>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
            <h4 class="card-title text-center">Laporan</h4>
          </div>
          @if($isModalOpen)
          @include('livewire.laporan.detaillaporan')
          @endif
          <?php $i = 0; ?>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                <tr>
                    <th>No</th>
                    <th>spedometer sebelum</th>
                    <th>spedometer sesudah</th>
                    <th>keterangan</th>
                    <th>tanggal keberangkatan</th>
                    <th>tanggal kembali</th>
                    <th>Total Km</th>
                    <th>total liter</th>
                     <th>detail</th> 
                </tr>
                </thead>
                <tbody>
                  @foreach ($laporans as $laporan)
                  <tr>
                      <td>{{ ++$i }}</td>
                      <td class="text-center"><img src="{{ asset('storage/' . $laporan->spedometersblm) }}" width="150" height="100"></td>
                      <td class="text-center"><img src="{{ asset('storage/' . $laporan->spedometersudah) }}" width="150" height="100"></td>
                      <td>
                        <textarea  rows="5" readonly>{{ $laporan->keterangan }}</textarea>
                      </td>
                      <td>{{ $laporan->tglberangkat }}</td>
                      <td>{{ $laporan->tglkembali }}</td>
                      <td>{{ $laporan->totalkm }}</td>
                      <td>{{ $laporan->liter }}</td>
                      <td><button wire:click="show({{ $laporan->id }})"
                        class="btn btn-infonew"><i class="fa-solid fa-eye"></i></button>
                         <button wire:click="delete({{ $laporan->id }})"
                            class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>
                         </button>
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