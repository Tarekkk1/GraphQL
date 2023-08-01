<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Logger;
use Psr\Container\ContainerInterface;
use Slim\App;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        'settings' => [
            'displayErrorDetails' => true,
            'logger' => [
                'name' => 'slim-app',
                'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
                'level' => Logger::DEBUG,
            ],
            'db' => [
                'name' => 'graphql',
                'host' => 'localhost',
                'username' => 'tarek',
                'password' => 'tarek',
                'driver' => 'pdo_mysql',
            ],
        ],
    ]);
};