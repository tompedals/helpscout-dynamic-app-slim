<?php

// To help the built-in PHP dev server, check if the request was actually for
// something which should probably be served as a static file
if (PHP_SAPI === 'cli-server' && $_SERVER['SCRIPT_FILENAME'] !== __FILE__) {
    return false;
}

require __DIR__ . '/../vendor/autoload.php';

$settings = require __DIR__ . '/../app/settings.php';
$app = new Slim\App($settings);

$container = $app->getContainer();
require __DIR__ . '/../app/dependencies.php';

require __DIR__ . '/../app/routes.php';

$app->run();
