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
        return $data;
    }

    public function end($code)
    {
        $data = $this->get($code);
        $data->actual_end_date = date('Y-m-d');
        $data->save();
        return $data;
    }

    // For Public viewing

    public function trainings()
    {
        return Training::latest()->select('code', 'name', 'scheduled_start_date', 'scheduled_end_date', 'actual_start_date', 'actual_end_date', 'max_seats')->get();
    }

    public function publicDetails($code)
    {
        return Training::where('code', $code)->select('code', 'name', 'description', 'scheduled_start_date', 'scheduled_end_date', 'max_seats')->first();
    }
}