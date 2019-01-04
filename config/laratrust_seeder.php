<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'c,r,u,d'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'user' => [
            'profile' => 'r,u',
            'support'=>'c,r,u'
        ],

        'editor' => [
            'profile' => 'r,u'
        ],
        'Author' => [
            'profile' => 'r,u'
        ],
        'contributor' => [
            'profile' => 'r,u'
        ],  
        'suppoter' => [
            'profile' => 'r,u'
        ],
        'subscriber' => [
            'profile' => 'r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
