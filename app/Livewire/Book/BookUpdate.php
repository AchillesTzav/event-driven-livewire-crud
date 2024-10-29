<?php

namespace App\Livewire\Book;

use App\Livewire\Forms\BookForm;
use Livewire\Component;
use App\Models\Book;

class BookUpdate extends Component
{
    public BookForm $form;

    public function mount($id)
    {
        $book = Book::findOrFail($id);

        $this->form->setBook($book);
    }

    public function update()
    {
        $this->validate();

        // use the update function from the form object
        $this->form->update();

        // dispatch an event to the upload image componet with the id of the specific book to update
        $this->dispatch('update-photo-event', $this->form->book->id);

        $this->dispatch('close-modal-event');

        $this->dispatch('refresh-table-event');
    }

    public function remove_image($id)
    {
        $this->dispatch('remove-image-event', $id);
    }

    public function render()
    {
        return view('livewire.book.book-update');
    }
}
