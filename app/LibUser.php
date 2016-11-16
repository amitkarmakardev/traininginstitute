<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibUser extends Model
{
    protected $fillable = ['user_id', 'name', 'email', 'org_details', 'type', 'training_code'];

    public function getDetails()
    {
        return $this->name . ', ' . $this->user_id;
    }
}
