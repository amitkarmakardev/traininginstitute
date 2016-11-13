<?php

namespace App\Repositories;

use App\Training;

class TrainingRepository
{

    public function all()
    {
        return Training::all();
    }

    public function store($request)
    {
        return Training::create($request->all());
    }

    public function get($code)
    {
        return Training::where('code', $code)->first();
    }

    public function start($code)
    {
        $data = $this->get($code);
        $data->actual_start_date = date('Y-m-d');
        $data->save();
    }

    public function end($code)
    {
        $data = $this->get($code);
        $data->actual_end_date = date('Y-m-d');
        $data->save();
    }

    public function ongoingTrainings()
    {
        return Training::where('scheduled_end_date', '>', date('Y-m-d'))->get();
    }
}