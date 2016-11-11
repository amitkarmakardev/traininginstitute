<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    protected $fillable = ['training_code', 'name', 'address', 'email', 'org_details'];

    public function setRollNoAttributes($value)
    {
        $this->attributes['roll_no'] = 1000;
    }
}
