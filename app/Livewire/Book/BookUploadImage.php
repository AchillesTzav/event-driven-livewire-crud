<?php

namespace App\Livewire\Book;

use Livewire\Component;
use App\Models\Book;
use App\Models\Image;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;
use Exception;

class BookUploadImage extends Component
{
    use WithFileUploads;


    #[Validate("nullable|image|mimes:jpeg,png,jpg|max:1024")]
    public $photo;

    public $placeholder='https://placehold.co/600x400';


    #[On('save-photo-event')]
    public function save_photo($book_id)
    {
        try {
            $this->validate();

            if ($this->photo && $this->photo->isValid()) {
                $image_path = $this->photo->store('photos');
            } else {
                $image_path = $this->placeholder;
            }
        } catch (Exception $e) {
            $image_path = $this->placeholder;
        }

        $book = Book::findOrFail($book_id);

        $book->images()->create([
            'book_id' => $book_id,
            'image_path' => $image_path,
        ]);
    }

    #[On('update-photo-event')]
    public function update_photo($book_id)
    {
        $book = Book::findOrFail($book_id);
        
        try {
            $this->validate();

            if ($this->photo ) {
                $image_path = $this->photo->store('photos');
            } else {
                $image_path = $book->images()->pluck('image_path')->first();
            }
        } catch (Exception $e) {
            $image_path = $book->images()->pluck('image_path')->first();
        }


        $book->images()->update([
            'book_id' => $book_id,
            'image_path' => $image_path,
        ]);
    }

    #[On('remove-image-event')]
    public function remove_image($book_id) 
    {
        $book = Book::findOrFail($book_id);

        $image_path = $book->images()->pluck('image_path')->first();

        $book->images()->update([
            'book_id' => $book_id,
            'image_path' => $this->placeholder,
        ]);

        Storage::delete($image_path);

        $this->dispatch('refresh-table-event'); 


    }


    public function render()
    {
        return view('livewire.book.book-upload-image');
    }
}

