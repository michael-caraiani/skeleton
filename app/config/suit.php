<?php

declare(strict_types=1);
$cache_dir = __DIR__.'/../cache';

return [
    'providers' => [
        '\App\Provider',
    ],
    'middlewares' => [
    ],
    'sentry' => [
        'dsn' => '@todo REPACE ME',
        'options' => [
            'app_path' => __DIR__.'/..',
            'excluded_app_paths' => [
                $cache_dir,
            ],
            'prefixies' => [
                dirname(__DIR__),
            ],
        ],
    ],

    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
        'debug' => true,
        'routerCacheFile' => $cache_dir.'/routes',
    ],
];
