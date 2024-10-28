<div>
    <form>
        <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
            x-on:livewire-upload-error="uploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress"
            class="flex flex-col [&>div]:p-2 items-center">

            @error('photo')
                <span class="error"> {{ $message }} </span>
            @enderror

            @if ($photo  && !$errors->has('photo'))
                <img class="w-16 h-16" src="{{ $photo->temporaryUrl() }}">
            @endif

            <div x-show="uploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>

            <div>
                <input class="w-56" type="file" wire:model.live="photo">
            </div>

            <div>
                <button type="button" wire:click="$cancelUpload('photo')">Cancel Upload</button>
            </div>

        </div>
    </form>
</div>
