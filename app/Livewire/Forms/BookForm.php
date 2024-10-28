<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Book;

class BookForm extends Form
{
    public ?Book $book;

    #[Validate('required')]
    #[Validate('min:2', message: 'Your input is too short.')]
    public $title = '';

    #[Validate('required')]
    #[Validate('min:5', message: 'Your input is too short.')]
    public $description = '';

    public $book_id;

    public $stored_image_path;


    public function setBook(Book $book)
    {
        $this->book = $book;

        $this->title = $book->title;
        $this->description = $book->description;
        $this->stored_image_path = $book->images()->pluck('image_path')->first();
    }

    public function store()
    {
        $this->validate();

        $book = Book::create($this->pull());

        // get the id of the newly created object
        $this->book_id = $book->id;
    }

    public function update()
    {
        $this->validate();

        $this->book->update($this->all());
    }
}

