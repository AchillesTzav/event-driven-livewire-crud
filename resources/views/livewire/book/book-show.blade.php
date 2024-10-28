<div>
    <x-custom.modal>
        <x-slot name="title">
            {{ __('Show Book') }}
        </x-slot>

        <x-slot name="content">
            <form>
                <div class="flex flex-col [&>div]:p-2 items-center">
                    <div>
                         {{$form->title}}
                    </div>

                    <div>
                         {{$form->description}}
                    </div>

                    <div>
                        <img class="w-16 h-16" src="{{$form->stored_image_path}}" alt="">
                    </div>
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <div>
                <x-secondary-button wire:click="$parent.close_modal">
                    Cancel
                </x-secondary-button>
            </div>
        </x-slot>
    </x-custom.modal>
</div>