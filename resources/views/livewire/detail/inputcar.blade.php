<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-10 px-15 pb-4 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-700 opacity-75"></div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-20 sm:align-middle sm:max-w-lg sm:w-full"role="dialog" aria-modal="true" aria-labelledby="modal-headline">
          <div class="modal-header text-center">
            <h5 class="modal-title w-100">input</h5> 
          </div>
          <br>
          <?php $i = 0; ?>
          <form>
            @if($filecar)
            Preview:
            <img src="{{ $filecar->temporaryUrl() }}" width="100" height="100">            
            @endif

           
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-cars"></i></div>
              </div><span></span>
              <input type="file" placeholder="Photo kendaraan"  @error('filecar') is-invalid @enderror class="form-control" wire:model="filecar">
            </div>
            @error('filecar')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>    
          @enderror
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-car"></i></div>
              </div><span></span>
              <input type="text" placeholder="Merk kendaraan"  @error('merkkendaraan') is-invalid @enderror class="form-control" wire:model="merkkendaraan">
            </div>
            @error('merkkendaraan')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>    
          @enderror                   
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></div>
                  </div><span></span>
                  <input type="text" placeholder="Plat kendaraan"  @error('platmobil') is-invalid @enderror class="form-control" wire:model="platmobil">
                </div>
                @error('platmobil')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>    
              @enderror

                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></div>
                  </div><span></span>
                  <input type="text" placeholder="stnk"  @error('nostnk') is-invalid @enderror class="form-control" wire:model="nostnk">
                </div>
                @error('nostnk')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>    
              @enderror

                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa-solid fa-palette"></i></div>
                  </div><span></span>
                  <input type="text" placeholder="Warna"  @error('warna') is-invalid @enderror class="form-control" wire:model="warna">
                </div>
                @error('warna')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>    
              @enderror

                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></div>
                  </div><span></span>
                  <input type="text" placeholder="Bpkb"  @error('nobpkb') is-invalid @enderror class="form-control" wire:model="nobpkb">
                </div>
                @error('nobpkb')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>    
              @enderror

                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa-solid fa-gauge"></i></div>
                  </div><span></span>
                  <input type="text" placeholder="total bahan bakar"  @error('bahanbakar') is-invalid @enderror class="form-control" wire:model="bahanbakar">
                </div>
                @error('bahanbakar')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>    
              @enderror
              </form>
              <button wire:click="tutupcreate()" class="btn btn-primary">Cancel</button>
              <button wire:click="store()" type="button"
              class="btn btn-info">
              input
          </button>
        </div>
    </div>
</div>              
 
