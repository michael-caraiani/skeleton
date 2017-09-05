<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Easy to use routing with route groups.
 *
 * @see https://www.slimframework.com/docs/objects/router.html#route-groups
 */
$routes = [
    '/' => [ //Default group for /
        '' => [
            'name' => 'index',
            'methods' => ['GET'],
            'closure' => function (ServerRequestInterface $request, ResponseInterface $response, array $args) {
                return $response->write('Hello world!');
            },
        ],
    ],
];

foreach (glob(__DIR__.'/routes/*.php') as $item) {
    $group = current(explode('.', basename($item)));
    $routes[$group] = include $item;
}

return $routes;
