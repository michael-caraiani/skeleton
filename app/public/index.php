<?php

declare(strict_types=1);
$root = __DIR__.'/..';
require $root.'/vendor/autoload.php';
$app = new \TiSuit\Core\App(['config_dir' => $root.'/config/']);
$app->run();
