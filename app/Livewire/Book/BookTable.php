<?php

namespace App\Livewire\Book;

use Livewire\Component;
use App\Models\Book;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class BookTable extends Component
{

    protected $listeners = [ 'refresh-table-event' => '$refresh'];

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $image_path = $book->images->pluck('image_path')->first();
        if (file_exists($image_path)) {
            Storage::delete($image_path);
        }
        $book->delete();
    }

    public function edit($id)
    {
        $this->dispatch('update-event', $id);
    }

    public function show($id)
    {
        $this->dispatch('show-event', $id);
    }


    public function render()
    {
        return view('livewire.book.book-table', [
            'books' => Book::paginate(5),
        ]);
    }
}
