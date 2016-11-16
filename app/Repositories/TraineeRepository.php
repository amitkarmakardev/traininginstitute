<?php

namespace App\Repositories;

use App\Trainee;
use App\Training;

class TraineeRepository
{

    public static function getNextTraineeRegId($training_code)
    {
        $count = intval(Trainee::where('training_code', $training_code)->count());
        return $training_code . ($count + 1);
    }

    public function isTraineeAuthorized($code, $authorization_code)
    {
        $training = Training::where('code', $code)->first();
        if ($training->authorization_code == $authorization_code) {
            return true;
        } else {
            return false;
        }
    }

    public function register($request)
    {
        return Trainee::create($request->all());
    }
}