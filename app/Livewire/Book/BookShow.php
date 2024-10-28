<?php

namespace App\Livewire\Book;

use App\Livewire\Forms\BookForm;
use Livewire\Component;
use App\Models\Book;

class BookShow extends Component
{
    public BookForm $form;


    public function mount($id)
    {
        $book = Book::findOrFail($id);

        $form_data = $this->form->setBook($book);
    }


    public function render()
    {
        return view('livewire.book.book-show');
    }
}
