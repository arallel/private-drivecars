<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        {{-- ktp --}}
          <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="ktp" value="{{ __('ktp') }}" />
            <x-jet-input id="ktp" type="text" class="mt-1 block w-full" wire:model.defer="state.ktp" autocomplete="ktp" />
            <x-jet-input-error for="ktp" class="mt-2" />
        </div>
        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
         {{-- gender --}}
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="gender" value="{{ __('gender') }}" />
            <x-jet-input id="gender" type="text" class="mt-gender block w-full" wire:model.defer="state.gender" autocomplete="gender" />
            <x-jet-input-error for="gender" class="mt-2" />
        </div>
         {{-- tempat_lahir --}}
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="tempat_lahir" value="{{ __('tempat_lahir') }}" />
            <x-jet-input id="tempat_lahir" type="text" class="mt-tempat_lahir block w-full" wire:model.defer="state.tempat_lahir" autocomplete="tempat_lahir" />
            <x-jet-input-error for="tempat_lahir" class="mt-2" />
        </div>
         {{-- tanggal_lahir --}}
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="tanggal_lahir" value="{{ __('tanggal_lahir') }}" />
            <x-jet-input id="tanggal_lahir" type="date" class="mt-tanggal_lahir block w-full" wire:model.defer="state.tanggal_lahir" autocomplete="tanggal_lahir" />
            <x-jet-input-error for="tanggal_lahir" class="mt-2" />
        </div>
         {{-- provinsi --}}
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="provinsi" value="{{ __('provinsi') }}" />
            <x-jet-input id="provinsi" type="text" class="mt-provinsi block w-full" wire:model.defer="state.provinsi" autocomplete="provinsi" />
            <x-jet-input-error for="provinsi" class="mt-2" />
        </div>
         {{-- kabupaten --}}
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="kabupaten" value="{{ __('kabupaten') }}" />
            <x-jet-input id="kabupaten" type="text" class="mt-kabupaten block w-full" wire:model.defer="state.kabupaten" autocomplete="kabupaten" />
            <x-jet-input-error for="kabupaten" class="mt-2" />
        </div>
         {{-- kecamatan --}}
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="kecamatan" value="{{ __('kecamatan') }}" />
            <x-jet-input id="kecamatan" type="text" class="mt-kecamatan block w-full" wire:model.defer="state.kecamatan" autocomplete="kecamatan" />
            <x-jet-input-error for="kecamatan" class="mt-2" />
        </div>
         {{-- alamat --}}
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="alamat" value="{{ __('alamat') }}" />
            <x-jet-input id="alamat" type="text" class="mt-alamat block w-full" wire:model.defer="state.alamat" autocomplete="alamat" />
            <x-jet-input-error for="alamat" class="mt-2" />
        </div>
        
        
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
