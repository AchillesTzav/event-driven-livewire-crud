<?php

namespace App\Livewire\Book;

use Livewire\Component;
use Livewire\Attributes\On; 

class BookPage extends Component
{
    
    public $is_create = false;

    public $is_update = false;

    public $is_show = false; 

    public $book_id;

    //public $book;

    #[On('update-event')]
    public function open_update_component($id) 
    {
        $this->is_create = false;
        $this->is_update = true;
        $this->is_show = false;

        $this->book_id = $id;

    }

    #[On('show-event')]
    public function open_show_component($id) 
    {
        $this->is_create = false;
        $this->is_update = false;
        $this->is_show = true;
    
        $this->book_id = $id;
    }

    #[On('close-modal-event')]
    public function close_modal()
    {
        $this->is_create = false;
        $this->is_update = false;
        $this->is_show = false;
    }



    public function render()
    {
        return view('livewire.book.book-page');
    }
}
