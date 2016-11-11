<?php

return [
    'locations' => [
        'Simulator Library' => 'Simulator Library',
        'Technical Building Library' => 'Technical Building Library',
    ],

    'create_validation_rules' => [
        'title' => 'required',
        'author_details' => 'required',
        'publish_year' => 'required|integer',
        'location' => 'required',
        'almirah_no' => 'required|integer',
        'shelf_no' => 'required|integer',
        'rack_no' => 'required|integer',
        'no_of_copies' => 'required|integer',
    ]
];