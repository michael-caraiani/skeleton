<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

return [
    '' => [
        'name' => 'home-index',
        'methods' => ['GET'],
        'closure' => function (ServerRequestInterface $request, ResponseInterface $response, array $args) {
            return $response->write('Hello on home');
        },
    ],
];
