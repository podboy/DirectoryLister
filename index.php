<?php

use App\Bootstrap\AppManager;
use App\Bootstrap\BootManager;
use DI\ContainerBuilder;
use Dotenv\Dotenv;

require __DIR__ . '/app/vendor/autoload.php';

// Set file access restrictions
ini_set('open_basedir', __DIR__);

// Initialize environment variable handler
Dotenv::createUnsafeImmutable(__DIR__)->safeLoad();

// Initialize the container
$container = BootManager::createContainer(__DIR__ . '/app/config');

// Initialize the application
$app = $container->call(AppManager::class);

// Engage!
$app->run();
