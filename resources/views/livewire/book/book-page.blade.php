<div>
  <x-slot name="content">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('BookPage') }}
      </h2>
  </x-slot>

  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-4">
                <div class="p-8 ">
                    <x-button wire:click="$set('is_create', true)">Create</x-button>
                </div>

                @if ($is_create)
                  <livewire:book.book-create/>
                @endif

                @if ($is_update)
                  //render book-update component
                @endif

                @if ($is_show)
                  //render book-create component
                @endif

                <livewire:book.book-table/>
            </div>
        </div>
    </div>

</div>

