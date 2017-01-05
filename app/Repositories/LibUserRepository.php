<?php

namespace App\Repositories;

use App\LibUser;

class LibUserRepository
{

    public function all()
    {
        return LibUser::paginate(8);
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