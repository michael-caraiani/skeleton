<?php

declare(strict_types=1);

namespace App;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Application Service Provider.
 */
class Provider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(Container $container): void
    {
        $config['app_router'] = $this->setAppRouter();
    }

    /**
     * Set App Router instance.
     *
     * @return callable
     */
    protected function setAppRouter(): callable
    {
        return function ($c) {
            return new Router($c);
        };
    }
}
