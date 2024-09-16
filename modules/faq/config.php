<?php

return [
    '__name' => 'faq',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/faq.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/faq' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-user' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Faq\\Model' => [
                'type' => 'file',
                'base' => 'modules/faq/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'faq' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'question' => [
                    'type' => 'text'
                ],
                'answer' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];