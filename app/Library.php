<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{

    protected $fillable = ['book_id', 'lib_user_id', 'issued_at', 'user'];

    public function setUserAttribute($value)
    {
        $this->attributes['user'] = 'librarian';
//        Todo: implement after creating authorization
//        $this->attributes['user'] = auth()->user()->id;
    }

    public function book()
    {
        return $this->hasOne('App\Book', 'id', 'book_id');
    }

    public function libUser()
    {
        return $this->hasOne('App\LibUser', 'user_id', 'lib_user_id');
    }

    public function setIssuedAtAttribute()
    {
        $this->attributes['issued_at'] = Carbon::now();
    }

}