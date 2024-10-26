<div>
<form>
        <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
            x-on:livewire-upload-error="uploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
           
            @error('photo')
                <span class="error"> {{ $message }} </span>
            @enderror


           
            
            @if ($photo  && !$errors->has('photo'))
                <img class="w-16 h-16" src="{{ $photo->temporaryUrl() }}">
            @endif

            <div>
                <input type="file" wire:model.live="photo">

                <button type="button" wire:click="$cancelUpload('photo')">Cancel Upload</button>
            </div>
            
            <div x-show="uploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div>
    </form>
</div>
