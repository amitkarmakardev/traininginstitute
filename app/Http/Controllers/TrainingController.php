<?php

namespace App\Http\Controllers;

use App\Repositories\TrainingRepository;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    protected $repository;

    public function __construct(TrainingRepository $repository)
    {
//        $this->middleware('auth');
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
        $this->repository->start($code);
        return redirect()->back();
    }

    public function end($code)
    {
        $this->repository->end($code);
        return redirect()->back();
    }

    public function show($code)
    {

    }

    public function publicIndex()
    {
        $data_list = $this->repository->ongoingTrainings();
        return view('public.registration.index', compact('data_list'));
    }
}
