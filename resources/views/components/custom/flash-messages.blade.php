@if (session('create'))
  <div class="p-4 mb-2 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    <span class="font-medium"> {{ session('create') }}</span>
  </div>
@endif

@if (session('update'))
  <div class="p-4 mb-2 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <span class="font-medium"> {{ session('update') }}</span>
  </div>
@endif


@if (session('delete'))
  <div class="p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
    <span class="font-medium"> {{ session('delete') }}</span>
  </div>
@endif