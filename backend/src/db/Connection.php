<?php

namespace App\db;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
class Connection
{
    private static ?Capsule $capsule = null;

    public static function init(): void
    {
        if (self::$capsule !== null) {
            return;
        }

        self::$capsule = new Capsule();

        self::$capsule->addConnection([
            'driver' => $_ENV['DB_CONNECTION'] ?? 'mysql',
            'host' => $_ENV['DB_HOST'] ?? '127.0.0.1',
            'port' => $_ENV['DB_PORT'] ?? 3306,
            'database' => $_ENV['DB_DATABASE'] ?? 'conversations_db',
            'username' => $_ENV['DB_USERNAME'] ?? 'root',
            'password' => $_ENV['DB_PASSWORD'] ?? '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
        ]);

        self::$capsule->setEventDispatcher(new Dispatcher(new Container()));
        self::$capsule->setAsGlobal();
        self::$capsule->bootEloquent();
    }

    public static function getCapsule(): ?Capsule
    {
        return self::$capsule;
    }
}