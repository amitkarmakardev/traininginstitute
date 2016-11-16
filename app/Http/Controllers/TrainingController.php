<?php

namespace App\Http\Controllers;

use App\Events\TrainingEnded;
use App\Events\TrainingStarted;
use App\Repositories\TrainingRepository;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    protected $repository;

    public function __construct(TrainingRepository $repository)
    {
        $this->middleware('auth')->except('publicIndex');
        $this->repository = $repository;
    }

    public function index()
    {
        $data_list = $this->repository->all();
        return view('admin.training.index', compact('data_list'));
    }

    public function create()
    {
        return view('admin.training.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, config('traininginstitute.training.validation_rules'));
        $this->repository->store($request);
        return redirect()->to(url('admin', ['training']));
    }

    public function start($code)
    {
        $training = $this->repository->start($code);

        // fire training started event and create lib users same as tranees
        event(new TrainingStarted($training));
        return redirect()->back();
    }

    public function end($code)
    {
        $training = $this->repository->end($code);

        // fire training ended event and delete lib users same as trainees
        event(new TrainingEnded($training));
        return redirect()->back();
    }

    public function show($code)
    {
        $data = $this->repository->get($code);
        return view('admin.training.show', compact('data'));
    }

    public function publicIndex()
    {
        $data_list = $this->repository->ongoingTrainings();
        return view('public.registration.index', compact('data_list'));
    }

    public function publicDetails($code)
    {
        $data = $this->repository->publicDetails($code);
        return view('public.registration.show', compact('data'));
    }
}
