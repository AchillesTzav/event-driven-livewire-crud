<div>
    <x-custom.modal>
        <x-slot name="title">Update Book</x-slot>

        <x-slot name="content">
            <form>
                <div class="flex flex-col [&>div]:p-2 items-center">
                    <div>
                        <x-label for="title">Book title</x-label>
                        <x-input type="text" id="title" wire:model.live="form.title"></x-input>
                    </div>


                    @error('form.title')
                        <span class="error">{{ $message }}</span>
                    @enderror

                    <div>
                        <x-label for="description">Book description</x-label>
                        <textarea class="rounded" type="text" id="description" wire:model.live="form.description"></textarea>
                    </div>


                    @error('form.description')
                        <span class="error">{{ $message }}</span>
                    @enderror

                    <div>
                    <img class="w-16 h-16" src="{{$form->stored_image_path}}" alt="">
                    </div>

                    <div>
                        <livewire:book.book-upload-image />
                    </div>
                </div>

            </form>

        </x-slot>

        <x-slot name="footer">
            <div>
                <x-button wire:click='save' type="submit">update</x-button>

                <x-secondary-button wire:click="$parent.close_modal">
                    Cancel
                </x-secondary-button>
            </div>
        </x-slot>

    </x-custom.modal>
</div>


