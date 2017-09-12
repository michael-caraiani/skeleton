<?php

declare(strict_types=1);
$root = __DIR__.'/..';
require $root.'/vendor/autoload.php';
(new \Dotenv\Dotenv($root.'/env', getenv('APP_ENV')))->load();
$app = new \TiSuit\Core\App(['config_dir' => $root.'/config/']);
$app->run();
