<?php

return [
    'role_structure' => [
        'administrator' => [
            'users' => 'c,r,u,uo,d,do',
            'acl' => 'c,r,u,d',
            'posts' => 'c,r,u,uo,d,do',
            'categories' => 'c,r,u,uo,d,do',
            'tags' => 'c,r,u,uo,d,do',
            'settings' => 'c,r,u,d',
            'pages' => 'c,r,u,d',
            'widgets' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'author' => [
            'posts' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'tags' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'subscriber' => [
            'posts' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'user' => [
            'profile' => 'r,u',
        ],
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'uo' => 'update other',
        'd' => 'delete',
        'do' => 'delete other'
    ]
];
