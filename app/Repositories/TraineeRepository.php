<?php

namespace App\Repositories;

use App\Trainee;
use App\Training;

class TraineeRepository
{

    public function register($request)
    {
        $training = Training::where('code', $request->get('training_code'))->first();

        if ($training->authorization_code == $request->get('authorization_code')) {
            Trainee::create($request->only(['training_code', 'name', 'email', 'address', 'org_details']));
        } else {
            return 'Authorization code does not match';
        }
    }
}