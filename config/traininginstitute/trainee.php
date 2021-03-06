<?php

return [

    'validation_rules' => [
        'training_code' => 'required|exists:trainings,code',
        'name' => 'required',
        'address' => 'required',
        'email' => 'required|email|unique:trainees,email',
        'org_details' => 'required',
        'authorization_code' => 'required',
    ],
];