<?php

declare(strict_types=1);
$cache_dir = dirname(__DIR__).'/cache';

return [
    'providers' => [
        '\App\Provider',
    ],
    'middlewares' => [
    ],
    'sentry' => [
        'dsn' => 'https://fa38d114872b4533834f0ffd53e59ddc:54ffe4da5b23455da1b93d4b6abc246e@sentry.io/211424', //@todo REPACE ME
        'options' => [
            'app_path' => dirname(__DIR__),
            'environment' => getenv('APP_ENV'),
            'excluded_app_paths' => [
                $cache_dir,
            ],
            'prefixies' => [
                dirname(__DIR__),
            ],
        ],
    ],

    'settings' => [
        'displayErrorDetails' => ('prod' === getenv('APP_ENV')) ? false : true,
        'determineRouteBeforeAppMiddleware' => true,
        'debug' => ('prod' === getenv('APP_ENV')) ? false : true,
        'routerCacheFile' => ('prod' === getenv('APP_ENV')) ? $cache_dir.'/routes' : false,
    ],
];
