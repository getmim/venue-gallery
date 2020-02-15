<?php

return [
    '__name' => 'venue-gallery',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/venue-gallery.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/venue-gallery' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'venue' => NULL
            ],
            [
                'gallery' => NULL
            ],
            [
                'lib-formatter' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'venue' => [
                'gallery_property' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Gallery\\Model\\Gallery',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'gallery'
                ],
                'gallery_employee' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Gallery\\Model\\Gallery',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'gallery'
                ],
                'gallery_atmosphere' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Gallery\\Model\\Gallery',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'gallery'
                ],
                'gallery_food' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Gallery\\Model\\Gallery',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'gallery'
                ]
            ]
        ]
    ]
];