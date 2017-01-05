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
        $this->middleware('check-authority:issue,book');
        $this->repository = $repository;
    }

    public function showIssueForm()
    {
        $data_list = $this->repository->issuedBooks();
        return view('admin.library.issue', compact('data_list'));
    }

    public function showRetrieveForm()
    {
        $data_list = $this->repository->issuedBooks();
        return view('admin.library.retrieve', compact('data_list'));
    }

    public function issue(Request $request)
    {
        $this->validate($request, config('traininginstitute.library.validation_rules'));
        $status = $this->repository->store($request);
        if($status == 'success'){
            return redirect()->to(url('admin', ['library', 'issue']));
        }
        else{
            return $status;
        }
    }

    public function retrieve(Request $request)
    {
        $this->repository->updateRetrievedAt($request->get('id'));
        return redirect()->to(url('admin', ['library', 'retrieve']));
    }

    public function showHistory()
    {
        $data_list = $this->repository->history();
        return view('admin.library.history', compact('data_list'));
    }

}
