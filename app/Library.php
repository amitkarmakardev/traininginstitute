<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    public function issuable()
    {
        return $this->morphTo();
    }
}
