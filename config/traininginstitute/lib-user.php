<?php

return [
    'lib-user_types' => [
        'WBPDCL Employee' => 'WBPDCL Employee',
        'Trainee' => 'Trainee'
    ],

    'validation_rules' => [
        'user_id' => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'org_details' => 'required',
        'type' => 'required'
    ],
];