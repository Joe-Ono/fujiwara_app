<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('会社プロフィール情報') }}
    </x-slot>

    <x-slot name="description">
        {{ __('会社プロフィール情報を更新する。') }}
    </x-slot>

    <x-slot name="form">
        <!-- Company Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Company Profile Photo File Input -->
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

                <x-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Company Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->company->profile_photo_url }}" alt="{{ $this->user->company->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Company Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-secondary-button>

                @if ($this->user->company->profile_photo_path)
                    <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="company_photo" class="mt-2" />
            </div>
        @endif

        <!-- Company Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="company_name" value="{{ __('会社名') }}" />
            <x-input name="company_name" id="company_name" type="text" class="mt-1 block w-full" wire:model.defer="state.company.name" autocomplete="company_name" />
            <x-input-error for="company.name" class="mt-2" />
        </div>

        <!-- Company Profile -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="company_profile" value="{{ __('会社紹介') }}" />
            <textarea name="company_profile" id="company_profile" cols="30" rows="5" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" required  wire:model.defer="state.company.profile" ></textarea>
            <x-input-error for="company.profile" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
