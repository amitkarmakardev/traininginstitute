<?php

namespace App;

use App\Repositories\TraineeRepository;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    protected $fillable = ['training_code', 'name', 'address', 'email', 'reg_id', 'org_details'];

    public function setTrainingCodeAttribute($value)
    {
        $modified_training_code = strtoupper($value);
        $this->attributes['training_code'] = $modified_training_code;
        // Also set trainee reg id
        $this->attributes['reg_id'] = TraineeRepository::getNextTraineeRegId($modified_training_code);
    }
}