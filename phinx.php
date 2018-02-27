<?php

require __DIR__ . '/vendor/autoload.php';

$db = include __DIR__ . '/config/db.php';

// list --> modelo de list so funcionará a partir do PHP 7 ( variáveis podem possuir nome diferente)
list(
    'driver' => $adapter,
    'host' => $host,
    'database' => $name,
    'username' => $user,
    'password' => $pass,
    'charset' => $charset,
    'collation' => $collation
    ) = $db['development'];

return[
    'paths' => [
        'migrations' => [
            __DIR__ . '/db/migrations'
        ],
        'seeds' => [
            __DIR__ . '/db/seeds'
        ]
    ],
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_database' => 'development',
        'development' => [
             'adapter' => $adapter,
             'host' => $host,
             'name' => $name,
             'user' => $user,
             'pass' => $pass,
             'charset' => $charset,
             'collation' => $collation
        ]
    ]
];