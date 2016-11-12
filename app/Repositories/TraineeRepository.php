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


    public function register($request)
    {
        $training = Training::where('code', $request->get('training_code'))->first();

        if ($training->authorization_code == $request->get('authorization_code')) {
            Trainee::create($request->all());
        } else {
            return 'Authorization code does not match';
        }
    }
}