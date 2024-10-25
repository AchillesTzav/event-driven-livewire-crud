<div>
    
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{$book->id}}</td>
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
