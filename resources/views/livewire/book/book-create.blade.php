<div>
    <x-custom.modal>
        <x-slot name="title">Create Book</x-slot>

        <x-slot name="content">
            <form>
                <div>
                    <x-label for="title">Book title</x-label>
                    <x-input type="text" id="title" wire:model.live="form.title"></x-input>
                    @error('form.title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>


                <div>
                    <x-label for="description">Book description</x-label>
                    <x-input type="text" id="description" wire:model.live="form.description"></x-input>
                    @error('form.description')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                
                <div>
                    <livewire:book.book-upload-image />
                </div>
                
            </form>

        </x-slot>

        <x-slot name="footer">
            <div>
                <x-button wire:click='save' type="submit">save</x-button>

                <x-secondary-button wire:click="$parent.close_modal">
                    Cancel
                </x-secondary-button>
            </div>
        </x-slot>

    </x-custom.modal>
</div>


