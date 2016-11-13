<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = ['book_id', 'lib_user_id', 'status', 'user'];

    public function setUserAttribute($value)
    {
        $this->attributes['user'] = 'librarian';

//        Todo: implement after creating authorization
//        $this->attributes['user'] = auth()->user()->id;
    }
}
