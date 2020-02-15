<?php

return [
    'Venue\\Model\\Venue' => [
        'fields' => [
            'gallery_food' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true 
                ],
                'index' => 12100
            ],
            'gallery_atmosphere' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true 
                ],
                'index' => 12102
            ],
            'gallery_employee' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true 
                ],
                'index' => 12103
            ],
            'gallery_property' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true 
                ],
                'index' => 12104
            ]
        ]
    ]
];