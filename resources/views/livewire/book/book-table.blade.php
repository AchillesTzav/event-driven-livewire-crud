<div>
    
    <table>
        <thead>
            <tr class="[&>th]:p-2">
                <th>id</th>
                <th>image</th>
                <th>title</th>
                <th>description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr class="[&>td]:p-2">
                <td>{{$book->id}}</td>
                <td><img class="w-16 h-16 rounded" src="{{$book->images()->pluck('image_path')->first()}}" alt=""></td>
                <td>{{$book->title}}</td>
                <td>{{$book->description}}</td>
                <td>
                    <x-button wire:click="show({{$book->id}})">show</x-button>
                </td>
                <td>
                    <x-button wire:click="edit({{$book->id}})">edit</x-button>
                </td>
                <td>
                    <x-button wire:click="destroy({{$book->id}})">destroy</x-button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
