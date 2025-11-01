<?php

namespace App\Controllers;

use App\Models\Tag;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class TagController
{
    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     * Получить все категории
     */
    public function index(Request $request, Response $response): Response
    {
        $tags = Tag::with('lessons')->get();

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $tags
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     * Получить один тэг по ID
     */
    public function show(Request $request, Response $response, array $args): Response
    {
        $tag = Tag::with('lessons')->find($args['id']);

        if (!$tag) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'message' => 'Тег не найден'
            ]));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $tag
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     * Создать новый тэг
     */
    public function create(Request $request, Response $response): Response
    {
        $data = $request->getParsedBody();

        $validationErrors = $this->validateTag($data);
        if (!empty($validationErrors)) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'errors' => $validationErrors
            ]));
            return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
        }

        $tag = Tag::create([
            'name_tag' => $data['name_tag']
        ]);

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $tag,
            'message' => 'Тег успешно создан'
        ]));

        return $response->withStatus(201)->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     * Обновить тэг
     */
    public function update(Request $request, Response $response, array $args): Response
    {
        $tag = Tag::find($args['id']);

        if (!$tag) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'message' => 'Тег не найден'
            ]));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }

        $data = $request->getParsedBody();

        if (isset($data['name_tag'])) {
            $tag->name_tag = $data['name_tag'];
        }

        $tag->save();

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $tag,
            'message' => 'Тег успешно обновлен'
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     * Удалить тэг
     */
    public function delete(Request $request, Response $response, array $args): Response
    {
        $tag = Tag::find($args['id']);

        if (!$tag) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'message' => 'Тег не найден'
            ]));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }

        // Проверяем, есть ли связанные уроки
        if ($tag->lessons()->count() > 0) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'message' => 'Невозможно удалить тег с уроками'
            ]));
            return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
        }

        $tag->delete();

        $response->getBody()->write(json_encode([
            'success' => true,
            'message' => 'Тег успешно удален'
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param $data
     * @return array
     */
    private function validateTag($data): array
    {
        $errors = [];

        if (!isset($data['name_tag']) || empty(trim($data['name_tag']))) {
            $errors['name_tag'] = 'Название тега обязательно';
        } elseif (strlen($data['name_tag']) > 255) {
            $errors['name_tag'] = 'Название тега не должно превышать 255 символов';
        }

        return $errors;
    }
}