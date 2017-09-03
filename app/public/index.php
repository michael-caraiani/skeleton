<?php

declare(strict_types=1);
require __DIR__.'/../vendor/autoload.php';
$app = new \TiSuit\Core\App(['config_dir' => __DIR__.'/../config/']);
$app->run();
