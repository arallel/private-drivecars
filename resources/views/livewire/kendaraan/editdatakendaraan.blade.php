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
                <h5 class="text-center border-bottom">Edit data Kendaraan</h5>
              </div>
              <div class="card-body">
                <form role="form text-left">
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-car icon"></i>
                    <input type="text" class="form-control" wire:model="merkkendaraan">
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-palette icon"></i>
                    <input type="color" class="form-control" wire:model="warna">
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-address-card icon"></i>
                    <input type="text" class="form-control" wire:model="nostnk">
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-address-card icon"></i>
                    <input type="text" class="form-control" wire:model="nobpkb">
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-car icon"></i>
                    <input type="text" class="form-control" wire:model="platmobil">
                  </div>
                  </div>
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-gas-pump icon"></i>
                    <input type="text" class="form-control" wire:model="bahanbakar">
                  </div>
                  </div>
                </form>
               <button wire:click="tutupedit()" class="btn btn-primary">Cancel</button>
              <button wire:click="update()" type="button"
              class="btn btn-info active">
              input
          </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
