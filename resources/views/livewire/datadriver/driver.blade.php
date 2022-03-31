<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center" >
          <h4 class="card-title"Drive Cars Table</h4>
        </div>
        @if($isModalOpen)
        @include('livewire.datadriver.showdetail')
        @endif
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                  <th>No</th>
                  <th>Nama</th>
                  <th>email</th>
                  <th class="text-center">Gender</th>
                  <th class="text-center">Status pegawai</th>
                  <th>Detail</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td> 
                    <td>{{ $user->email }}</td>
                    <td class="text-center">{{ $user->gender }}</td>
                    <td class="text-center">{{ $user->status }}</td>
                    <td><button wire:click="show({{ $user->id }})"
                      class="btn btn-info"><i class="fa-solid fa-eye"></i></button></td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> 
  </div> 
  