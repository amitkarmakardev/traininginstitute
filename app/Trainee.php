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

    public function training()
    {
        return $this->belongsTo('App\Training', 'training_code', 'code');
    }

    public function libUser()
    {
        return $this->hasOne('App\LibUser', 'user_id', 'reg_id');
    }
}