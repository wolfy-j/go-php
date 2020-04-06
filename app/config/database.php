<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

use Spiral\Database\Driver;

return [
    'default'   => 'default',
    'databases' => [
        'default' => ['driver' => env('DB_DRIVER', 'mysql')],
    ],
    'drivers'   => [
        'sqlite' => [
            'driver'     => Driver\SQLite\SQLiteDriver::class,
            'connection' => 'sqlite:' . directory('runtime') . 'runtime.db',
            'profiling'  => true,
        ],
        'mysql' => [
            'driver'     => Driver\MySQL\MySQLDriver::class,
            'connection' => sprintf('mysql:host=%s;dbname=%s', env('DB_HOST', 'localhost'), env('DB_NAME', 'spiral')),
            'username'   => env('DB_USER', 'root'),
            'password'   => env('DB_PASSWORD', 'root'),
        ],
        'postgres'  => [
            'driver'     => Driver\Postgres\PostgresDriver::class,
            'options'    => [
                'connection' => 'pgsql:host=127.0.0.1;dbname=' . env('DB_NAME'),
                'username'   => env('DB_USERNAME'),
                'password'   => env('DB_PASSWORD'),
            ]
        ],
        'sqlServer' => [
            'driver'     => Driver\SQLServer\SQLServerDriver::class,
            'options'    => [
                'connection' => 'sqlsrv:Server=MY-PC;Database=' . env('DB_NAME'),
                'username'   => env('DB_USERNAME'),
                'password'   => env('DB_PASSWORD'),
            ]
        ]
    ]
];
