<div class="container-fluid py-4">
 <div wire:poll.keep-alive>
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
                     @foreach ($users as $user)
                   <tr>
                    <td class="text-secondary text-sm font-weight-bold">
                      <div class="d-flex px-3 py-1">{{ $user->id }}</div></td>
                    <td class="text-secondary text-xs font-weight-bold">{{ $user->name }}</td> 
                    <td class="align-middle text-center text-secondary text-xs font-weight-bold">{{ $user->email }}</td>
                    <td class="align-middle text-center text-secondary text-xs font-weight-bold">{{ $user->gender }}</td>
                    <td class="align-middle text-center"> 
                      @if($user->status == 3)
                         <span class="badge badge-sm bg-gradient-success">Active</span>
                      @else 
                       <img src="ui/assets/img/nonactive.png"> 
                      @endif  
                    </td>
                    <td class="align-middle text-center"><button  wire:click="show({{ $user->id }})"
                      class="btn btn-info"><i class="fa-solid fa-eye text-right"></i></button></td>
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
   @if($isModalOpen)
        @include('livewire.user.detailuser')
        @endif
  