  <style>
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
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-20 sm:align-middle sm:max-w-lg sm:w-full"role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="text-center border-bottom">Detail User</h5>
              </div>
              <div class="card-body">
                <form role="form text-left">
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-user icon"></i>
                    <input type="text" class="form-control" wire:model="name" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-regular fa-envelope icon"></i>
                    <input type="text" class="form-control" wire:model="email" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-venus-mars icon"></i>
                    <input type="text" class="form-control" wire:model="gender" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-phone icon"></i>
                    <input type="text" class="form-control" wire:model="contact" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-house icon"></i>
                    <input type="text" class="form-control" wire:model="tempat_lahir" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-calendar-days icon"></i>
                    <input type="text" class="form-control" wire:model="tanggal_lahir" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-map-location-dot icon"></i>
                    <input type="text" class="form-control" wire:model="provinsi" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-map-location-dot icon"></i>
                    <input type="text" class="form-control" wire:model="kabupaten" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-map-location-dot icon"></i>
                    <input type="text" class="form-control" wire:model="kecamatan" readonly>
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-location-dot icon"></i>
                    <input type="text" class="form-control" wire:model="alamat" readonly>
                  </div>
                  </div>
                </form>
                <button wire:click="closeModalPopover()" class="btn btn-primary">Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
