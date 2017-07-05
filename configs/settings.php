<?php
return [
    'settings' => [
        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ],

        // Database
        'db' => [
            'host' => getenv('MYSQL_HOST'),
            'user' => getenv('MYSQL_USER'),
            'pass' => getenv('MYSQL_PASSWORD'),
            'dbname' => getenv('MYSQL_DATABASE')
        ]
    ],
];