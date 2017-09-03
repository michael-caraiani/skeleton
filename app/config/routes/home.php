<?php

declare(strict_types=1);

return [
    '' => [
        'name' => 'home-index',
        'methods' => ['GET'],
        'closure' => function ($request, $response, $args) {
            return $response->write('Hello on home');
        },
    ],
];
