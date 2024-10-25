<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = [ 
        'book_id',
        'image_path',
    ];

    public function books() {
        return $this->belongsTo(Book::class);
    }
}
