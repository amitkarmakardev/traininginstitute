<?php

namespace App\Repositories;

use App\Book;

class BookRepository
{

    public function all()
    {
        return Book::all();
    }

    public function get($id)
    {
        return Book::find($id);
    }

    public function store($request)
    {
        for ($i = 0; $i < intval($request->get('no_of_copies')); $i++) {
            Book::create($request->except('no_of_copies'));
        }
    }

    public function update($request, $id)
    {
        $data = $this->get($id);
        $data->update($request->all());
    }

    public function searchResult($request)
    {
        return
            Book:: where('id', 'like', '%' . $request->get('id') . '%')
                ->Where('isbn', 'like', '%' . $request->get('isbn') . '%')
                ->Where('title', 'like', '%' . $request->get('title') . '%')
                ->Where('author_details', 'like', '%' . $request->get('author_details') . '%')
                ->get();
    }
}