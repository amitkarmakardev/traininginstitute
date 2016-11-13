<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function showIssueForm()
    {
        return view('admin.library.issue');
    }

    public function showRetrieveForm()
    {
        return view('admin.library.retrieve');
    }
}
