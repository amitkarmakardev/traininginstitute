<?php

return [

    'validation_rules' => [
        'code' => 'required|unique:trainings,code',
        'name' => 'required',
        'description' => 'required',
        'scheduled_start_date' => 'required|date',
        'scheduled_end_date' => 'required|date',
        'authorization_code' => 'required'
    ]

];