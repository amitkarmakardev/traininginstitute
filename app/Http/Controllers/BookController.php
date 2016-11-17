<?php

namespace App\Http\Controllers;

use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{

    protected $repository;

    public function __construct(BookRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        $data_list = $this->repository->all();
        return view('admin.book.index', compact('data_list'));
    }

    public function create()
    {
        $location_options = config('traininginstitute.book.locations');
        return view('admin.book.create', compact('location_options'));
    }

    public function store(Request $request)
    {
        $this->validate($request, config('traininginstitute.book.create_validation_rules'));
        $this->repository->store($request);
        return redirect()->to(url('admin', ['book']));
    }

    public function show($id)
    {
        $data = $this->repository->get($id);
        return view('admin.book.show', compact('data'));
    }

    public function edit($id)
    {
        $location_options = config('traininginstitute.book.locations');
        $data = $this->repository->get($id);
        return view('admin.book.edit', compact('data', 'location_options'));
    }

    public function update(Request $request, $id)
    {
        $this->repository->update($request, $id);
        return redirect()->to(url('admin', ['book', $id]));
    }

    public function search(Request $request)
    {
        $data_list = $this->repository->searchResult($request);
        return view('admin.book.index', compact('data_list'));
    }

    public function delete($id)
    {

    }
}
