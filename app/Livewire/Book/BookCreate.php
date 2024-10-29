<?php

namespace App\Livewire\Book;

use Livewire\Component;
use App\Livewire\Forms\BookForm;
use App\Models\Book;

class BookCreate extends Component
{

    public BookForm $form;


    public function save() 
    {
        $this->validate();

        // use the store function from the form object
        $this->form->store();

        
        // dispatch an event to the upload image componet with the id of the newly created book
        $this->dispatch('save-photo-event', $this->form->book_id);

        $this->dispatch('close-modal-event');

        $this->dispatch('flash-message-event', $status="create", $action="Book successfully created!");

        $this->dispatch('refresh-table-event');
    }

    
    public function render()
    {
        return view('livewire.book.book-create');
    }
}
