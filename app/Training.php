<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = ['code', 'name', 'description', 'scheduled_start_date', 'scheduled_end_date', 'max_seats', 'authorization_code'];

    public function hasStarted()
    {
        return $this->actual_start_date != null;
    }

    public function hasEnded()
    {
        return $this->actual_end_date != null;
    }

    public function isOngoing()
    {
        return $this->hasStarted() && !$this->hasEnded();
    }

    public function status()
    {
        if(!$this->hasStarted()){
            return 'Scheduled';
        }
        else{
            if($this->hasEnded()){
                return "Completed";
            }
            else{
                return "Ongoing";
            }
        }
    }

    public function trainees()
    {
        return $this->hasMany('App\Trainee', 'training_code', 'code');
    }

    public function libUsers()
    {
        return $this->hasMany('App\LibUser', 'training_code', 'code');
    }

}
