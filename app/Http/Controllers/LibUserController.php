<?php

namespace App\Http\Controllers;

use App\Repositories\LibUserRepository;
use Illuminate\Http\Request;

class LibUserController extends Controller
{

    protected $repository;

    public function __construct(LibUserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $data_list = $this->repository->all();
        return view('admin.lib-user.index', compact('data_list'));

    }

    public function create()
    {
        $type_options = config('traininginstitute.lib-user.lib-user_types');
        return view('admin.lib-user.create', compact('type_options'));
    }

    public function store(Request $request)
    {
        $this->validate($request, config('traininginstitute.lib-user.validation_rules'));
        $this->repository->store($request);
        return redirect()->to(url('admin', ['lib-user']));
    }

    public function delete($id)
    {
        $this->repository->delete($id);
        return redirect()->back();
    }
}
