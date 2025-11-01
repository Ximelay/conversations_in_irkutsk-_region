<?php

use App\Controllers\CategoryController;
use App\Controllers\LessonController;
use App\Controllers\TagController;
use App\db\Connection;
use Dotenv\Dotenv;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;
use Tuupola\Middleware\CorsMiddleware;

require __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->load();

Connection::init();

$app = AppFactory::create();

$app->setBasePath('');

$app->addBodyParsingMiddleware();

$app->addErrorMiddleware(
    $_ENV['APP_DEBUG'] === 'true',
    true,
    true
);

$app->add(new CorsMiddleware([
    "origin" => explode(',', $_ENV['CORS_ORIGIN'] ?? '*'),
    "methods" => ["GET", "POST", "PUT", "PATCH", "DELETE", "OPTIONS"],
    "headers.allow" => ["Content-Type", "Authorization", "X-Requested-With"],
    "headers.expose" => [],
    "credentials" => true,
    "cache" => 0,
]));

$app->group('/api', function (RouteCollectorProxy $group) {
    $group->group('/categories', function (RouteCollectorProxy $group) {
        $group->get('', [CategoryController::class, 'index']);
        $group->get('/{id}', [CategoryController::class, 'show']);
        $group->post('', [CategoryController::class, 'create']);
        $group->put('/{id}', [CategoryController::class, 'update']);
        $group->delete('/{id}', [CategoryController::class, 'delete']);
    });

    $group->group('/tags', function (RouteCollectorProxy $group) {
        $group->get('', [TagController::class, 'index']);
        $group->get('/{id}', [TagController::class, 'show']);
        $group->post('', [TagController::class, 'create']);
        $group->put('/{id}', [TagController::class, 'update']);
        $group->delete('/{id}', [TagController::class, 'delete']);
    });

    $group->group('/lessons', function (RouteCollectorProxy $group) {
        $group->get('', [LessonController::class, 'index']);
        $group->get('/by-grade', [LessonController::class, 'byGradeLevel']);
        $group->get('/{id}', [LessonController::class, 'show']);
        $group->post('', [LessonController::class, 'create']);
        $group->put('/{id}', [LessonController::class, 'update']);
        $group->delete('/{id}', [LessonController::class, 'delete']);
    });
});

$app->get('/', function ($request, $response) {
    $response->getBody()->write(json_encode([
        'name' => 'Conversations API',
        'version' => '1.0.0',
        'description' => 'API для образовательного ресурса "Разговоры о важном" Иркутской области',
        'endpoints' => [
            'categories' => '/api/categories',
            'tags' => '/api/tags',
            'lessons' => '/api/lessons'
        ]
    ]));
    return $response->withHeader('Content-Type', 'application/json');
});

// Обработка несуществующих маршрутов
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
    $response->getBody()->write(json_encode([
        'success' => false,
        'message' => 'Endpoint not found'
    ]));
    return $response
        ->withStatus(404)
        ->withHeader('Content-Type', 'application/json');
});

$app->run();