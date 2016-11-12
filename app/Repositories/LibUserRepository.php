<?php

namespace App\Repositories;

use App\LibUser;

class LibUserRepository
{


    public function all()
    {
        return LibUser::all();
    }

    public function store($request)
    {
        LibUser::create($request->all());
    }

    public function delete($id)
    {
        LibUser::destroy($id);
    }
}