<?php

namespace App\Http\Controllers;

use App\Events\TraineeRegistered;
use App\Repositories\TraineeRepository;
use Illuminate\Http\Request;

class TraineeController extends Controller
{

    protected $repository;

    public function __construct(TraineeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function showRegistrationForm($code)
    {
        return view('public.registration.form', compact('code'));
    }

    public function register(Request $request)
    {
        $this->validate($request, config('traininginstitute.trainee.validation_rules'));
        $trainee = $this->repository->register($request);

        if($trainee == 'failed'){
            return "Authorization code does not match";
        }
        else{
            // Fire trainee registered event
//            event(new TraineeRegistered($trainee));
            return redirect()->to(url('training'));
        }
    }
}
