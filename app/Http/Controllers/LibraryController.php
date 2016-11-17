<?php

namespace App\Http\Controllers;

use App\Library;
use App\Repositories\LibraryRepository;
use Illuminate\Http\Request;

class LibraryController extends Controller
{

    protected $repository;

    public function __construct(LibraryRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function showIssueRetrieveForm()
    {
        $data_list = Library::where('retrieved_at', null)->oldest()->get();
        return view('admin.library.issue-retrieve', compact('data_list'));
    }

    public function issue(Request $request)
    {
        $this->validate($request, config('traininginstitute.library.validation_rules'));
        $status = $this->repository->store($request);
        if($status == 'success'){
            return redirect()->to(url('admin', ['library', 'issue-retrieve']));
        }
        else{
            return $status;
        }
    }

    public function retrieve(Request $request)
    {
        $this->repository->updateRetrievedAt($request->get('id'));
        return redirect()->to(url('admin', ['library', 'issue-retrieve']));
    }

}
