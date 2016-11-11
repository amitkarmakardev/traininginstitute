<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'isbn', 'author_details', 'publish_year', 'location', 'almirah_no', 'shelf_no', 'rack_no'];
}
