<?php

namespace App\Livewire\Book;

use Livewire\Component;
use App\Models\Book;
use App\Models\Image;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

class BookUploadImage extends Component
{
    use WithFileUploads;

    
    #[Validate("nullable|image|mimes:jpeg,png,jpg|max:1024")]
    public $photo;

    public $placeholder='photos/idiot.jpg';

    #[On('save-photo-event')]
    public function save_photo($book_id)
    {
        $this->validate();

        if ($this->photo) 
        {
            $image_path = $this->photo->store('photos');
        } 
        else 
        {
            $image_path = $this->placeholder;
        }

        $book = Book::findOrFail($book_id);

        $book->images()->create([
            'book_id' => $book_id,
            'image_path' => $image_path,
        ]);
    }


    public function render()
    {
        return view('livewire.book.book-upload-image');
    }
}
