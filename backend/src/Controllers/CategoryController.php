<?php

namespace App\Controllers;

use App\Models\Category;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CategoryController
{
    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     * Получить все категории
     */
    public function index(Request $request, Response $response): Response
    {
        $categories = Category::with('lessons')->get();

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $categories
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     * Получить категорию по её id
     */
    public function show(Request $request, Response $response, array $args): Response
    {
        $category = Category::with('lessons')->find($args['id']);

        if (!$category) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'message' => 'Категория не найдена!'
            ]));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $category
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     * Создать категорию
     */
    public function create(Request $request, Response $response): Response
    {
        $data = $request->getParsedBody();

        $validationErrors = $this->validateCategory($data);
        if (!empty($validationErrors)) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'errors' => $validationErrors
            ]));
            return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
        }

        $category = Category::create([
            'name_cat' => $data['name_cat'],
            'description_cat' => $data['description_cat'] ?? null
        ]);

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $data,
            'message' => 'Категория успешно создана!'
        ]));

        return $response->withStatus(201)->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     * Обновить категорию
     */
    public function update(Request $request, Response $response, array $args): Response
    {
        $category = Category::find($args['id']);

        if (!$category) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'message' => 'Категория не найдена!'
            ]));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }

        $data = $request->getParsedBody();

        if (isset($data['name_cat'])) {
            $category->name_cat = $data['name_cat'];
        }
        if (isset($data['description_cat'])) {
            $category->description_cat = $data['description_cat'];
        }

        $category->save();

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $category,
            'message' => 'Категория успешно обновлена!'
        ]));
        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     * Удалить категорию
     */
    public function delete(Request $request, Response $response, array $args): Response
    {
        $category = Category::find($args['id']);

        if (!$category) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'message' => 'Категория не найдена!'
            ]));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }

        // Есть ли связанные уроки
        if ($category->lessons()->count() > 0) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'message' => 'Невозможно удалить категорию с уроками'
            ]));
            return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
        }

        $category->delete();

        $response->getBody()->write(json_encode([
            'success' => true,
            'message' => 'Категория успешно удалена!'
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param $data
     * @return array
     */
    private function validateCategory($data): array
    {
        $errors = [];

        if (!isset($data['name_cat']) || empty(trim($data['name_cat']))) {
            $errors['name_cat'] = 'Название категории обязательно!';
        } else if (strlen($data['name_cat']) > 255) {
            $errors['name_cat'] = 'Название категории не должно превышать 255 символов!';
        }

        if (isset($data['description_cat']) && strlen($data['description_cat']) > 255) {
            $errors['description_cat'] = 'Описание не должно превышать 255 символов';
        }

        return $errors;
    }
}