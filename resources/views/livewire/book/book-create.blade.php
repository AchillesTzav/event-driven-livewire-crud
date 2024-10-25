<div>
    <x-custom.modal>
        <x-slot name="title">Create Book</x-slot>

        <x-slot name="content">
            <div>
                Edw tha mpei h forma
            </div>
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


