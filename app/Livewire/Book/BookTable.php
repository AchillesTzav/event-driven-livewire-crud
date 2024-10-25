<?php

namespace App\Livewire\Book;

use Livewire\Component;
use App\Models\Book;
use Livewire\WithPagination;

class BookTable extends Component
{

    protected $listeners = [ 'refreshTable' => '$refresh'];

    public function destroy($id) 
    {
        Book::findOrFail($id)->delete();
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
