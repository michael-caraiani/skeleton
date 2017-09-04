<?php

declare(strict_types=1);

namespace App;

/**
 * Application level router.
 */
class Router extends \TiSuit\Core\Root
{
    /**
     * Map routes from `routes.php` config.
     *
     * @param \Slim\App $app
     */
    public function __invoke(\Slim\App $app): void
    {
        foreach ($this->config('routes') as $group_name => $routes) {
            $app->group($group_name, function () use ($group_name, $routes): void {
                foreach ($routes as $pattern => $info) {
                    $this->map($info['methods'] ?? ['GET', 'POST', 'PUT', 'DELETE', 'PATCH', 'OPTIONS'], $pattern, $info['closure'])
                        ->setName($info['name'] ?? $group_name.'-'.$pattern);
                }
            });
        }
    }
}
