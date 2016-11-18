<?php

namespace App\Repositories;

use App\Book;
use App\Library;
use Carbon\Carbon;

class LibraryRepository
{

    public function get($id)
    {
        return Library::find($id);
    }

    public function store($request)
    {
        $book = Book::find($request->get('book_id'));
        if($book->currentStatus() == 'available'){
            Library::create($request->all());
            return 'success';
        }
        else{
            return 'Book already issued';
        }
    }

    public function issuedBooks()
    {
        return Library::where('retrieved_at', null)->oldest()->get();
    }

    public function updateRetrievedAt($id)
    {
        $data = $this->get($id);
        $data->retrieved_at = Carbon::now();
        $data->save();
    }
}