<?php return [
    // If null, value will be pulled from app.debug
    'enableTestRoute' => null,

    'packages' => [
        'sentry/sentry-laravel' => [
            'providers' => [
                '\Sentry\Laravel\ServiceProvider',
            ],

            'aliases' => [
                'Sentry'   => '\Sentry\Laravel\Facade',
            ],

            'config_namespace' => 'sentry',

            'config' => [
                'dsn' => env('SENTRY_LARAVEL_DSN', env('SENTRY_DSN')),

                // capture release as git sha
                // 'release' => trim(exec('git --git-dir ' . base_path('.git') . ' log --pretty="%h" -n1 HEAD')),

                'breadcrumbs' => [
                    // Capture Laravel logs in breadcrumbs
                    'logs' => true,

                    // Capture SQL queries in breadcrumbs
                    'sql_queries' => true,

                    // Capture bindings on SQL queries logged in breadcrumbs
                    'sql_bindings' => true,

                    // Capture queue job information in breadcrumbs
                    'queue_info' => true,
                ],
            ],
        ],
    ],
];