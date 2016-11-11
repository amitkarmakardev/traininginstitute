<?php

namespace App\Http\Controllers;

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
        return $this->repository->register($request);
    }
}
