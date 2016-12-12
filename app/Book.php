<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'isbn', 'author_details', 'publish_year', 'location', 'almirah_no', 'shelf_no', 'rack_no', 'category'];

    public function currentStatus()
    {
        $current_book_status = $this->hasMany('App\Library', 'book_id', 'id')->latest()->first();
        if ($current_book_status == null) {
            return "available";
        } else {
            if ($current_book_status->retrieved_at == null) {
                return "issued";
            } else {
                return "available";
            }
        }
    }
}
