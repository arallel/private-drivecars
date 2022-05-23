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
                <h5 class="text-center border-bottom">Input Kendaraan</h5>
              </div>
              <div class="card-body">
                <form role="form text-left">
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                    <i class="fa-solid fa-upload icon"></i>
                    <input type="file" placeholder="Photo kendaraan"  @error('filecar') is-invalid @enderror class="form-control" wire:model="filecar">
                  </div>
                  </div>
                   @error('filecar')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>    
          @enderror
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-car icon"></i>
                    <input type="text" placeholder="Merk kendaraan"  @error('merkkendaraan') is-invalid @enderror class="form-control" wire:model="merkkendaraan">
                    
                  </div>
                  </div>
                   @error('merkkendaraan')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>    
          @enderror   
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-car icon"></i>
                    <input type="text" placeholder="Plat kendaraan"  @error('platmobil') is-invalid @enderror class="form-control" wire:model="platmobil">
                    
                  </div>
                  </div>
                   @error('platmobil')
                <div class="alert alert-danger" role="alert">
                  {{ $message }}
                </div>    
              @enderror
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                    <i class="fa-solid fa-palette icon"></i>
                    <input type="color" placeholder="Warna"  @error('warna') is-invalid @enderror class="form-control" wire:model="warna">
               
                  </div>
                  </div>
                   @error('warna')
                <div class="alert alert-danger" role="alert">
                  {{ $message }}
                </div>    
              @enderror
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-address-card icon"></i>
                    <input type="text" placeholder="stnk"  @error('nostnk') is-invalid @enderror class="form-control" wire:model="nostnk">
                
                  </div>
                  </div>
                  @error('nostnk')
                <div class="alert alert-danger" role="alert">
                  {{ $message }}
                </div>    
              @enderror
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                    <i class="fa-solid fa-address-card icon"></i>
                    <input type="text" placeholder="Bpkb"  @error('nobpkb') is-invalid @enderror class="form-control" wire:model="nobpkb">
                
                  </div>
                  </div>
                  @error('nobpkb')
                <div class="alert alert-danger" role="alert">
                  {{ $message }}
                </div>    
              @enderror
                  <div class="input-icons">
                  <div class="input-group input-group-outline my-3">
                     <i class="fa-solid fa-gas-pump icon"></i>
                    <input type="text" placeholder="total bahan bakar"  @error('bahanbakar') is-invalid @enderror class="form-control" wire:model="bahanbakar">
                
                  </div>
                  </div>
                  @error('bahanbakar')
                <div class="alert alert-danger" role="alert">
                  {{ $message }}
                </div>    
              @enderror
                </form>
                 <button wire:click="tutupcreate()" class="btn btn-primary">Cancel</button>
                 <button wire:click="store()" class="btn btn-info">input</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
