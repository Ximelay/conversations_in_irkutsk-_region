<?php

namespace App\Controllers;

use App\Models\Lesson;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class LessonController
{
    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     * Получить все уроки с фильтрацией
     */
    public function index(Request $request, Response $response): Response
    {
        $params = $request->getQueryParams();
        $query = Lesson::with(['category', 'tag']);

        // Фильтрация по категории
        if (isset($params['category_id'])) {
            $query->where('categories_id_cat', $params['category_id']);
        }

        // Фильтрация по тегу
        if (isset($params['tag_id'])) {
            $query->where('tags_id_tag', $params['tag_id']);
        }

        // Фильтрация по уровню класса
        if (isset($params['grade_level'])) {
            $query->where('grade_level_les', $params['grade_level']);
        }

        // Фильтрация по дате (от и до)
        if (isset($params['date_from'])) {
            $query->where('date_les', '>=', $params['date_from']);
        }
        if (isset($params['date_to'])) {
            $query->where('date_les', '<=', $params['date_to']);
        }

        // Поиск по названию
        if (isset($params['search'])) {
            $search = '%' . $params['search'] . '%';
            $query->where(function ($q) use ($search) {
                $q->where('title_les', 'LIKE', $search)
                    ->orWhere('description_les', 'LIKE', $search);
            });
        }

        // Сортировка
        $orderBy = $params['order_by'] ?? 'date_les';
        $orderDirection = $params['order_direction'] ?? 'asc';
        $query->orderBy($orderBy, $orderDirection);

        // Пагинация
        $page = $params['page'] ?? 1;
        $limit = $params['limit'] ?? 20;
        $offset = ($page - 1) * $limit;

        $total = $query->count();
        $lessons = $query->limit($limit)->offset($offset)->get();

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $lessons,
            'pagination' => [
                'total' => $total,
                'page' => (int)$page,
                'limit' => (int)$limit,
                'pages' => ceil($total / $limit)
            ]
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     * Получить один урок по его ID
     */
    public function show(Request $request, Response $response, array $args): Response
    {
        $lesson = Lesson::with(['category', 'tag'])->find($args['id']);

        if (!$lesson) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'message' => 'Урок не найден'
            ]));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $lesson
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     * Создать новый урок
     */
    public function create(Request $request, Response $response): Response
    {
        $data = $request->getParsedBody();

        $validationErrors = $this->validateLesson($data);
        if (!empty($validationErrors)) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'errors' => $validationErrors
            ]));
            return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
        }

        $lesson = Lesson::create([
            'title_les' => $data['title_les'],
            'description_les' => $data['description_les'] ?? null,
            'date_les' => $data['date_les'],
            'grade_level_les' => $data['grade_level_les'],
            'categories_id_cat' => $data['categories_id_cat'],
            'tags_id_tag' => $data['tags_id_tag']
        ]);

        $lesson->load(['category', 'tag']);

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $lesson,
            'message' => 'Урок успешно создан'
        ]));

        return $response->withStatus(201)->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     * Обновить урок
     */
    public function update(Request $request, Response $response, array $args): Response
    {
        $lesson = Lesson::find($args['id']);

        if (!$lesson) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'message' => 'Урок не найден'
            ]));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }

        $data = $request->getParsedBody();

        if (isset($data['title_les'])) {
            $lesson->title_les = $data['title_les'];
        }
        if (isset($data['description_les'])) {
            $lesson->description_les = $data['description_les'];
        }
        if (isset($data['date_les'])) {
            $lesson->date_les = $data['date_les'];
        }
        if (isset($data['grade_level_les'])) {
            $lesson->grade_level_les = $data['grade_level_les'];
        }
        if (isset($data['categories_id_cat'])) {
            $lesson->categories_id_cat = $data['categories_id_cat'];
        }
        if (isset($data['tags_id_tag'])) {
            $lesson->tags_id_tag = $data['tags_id_tag'];
        }

        $lesson->save();
        $lesson->load(['category', 'tag']);

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $lesson,
            'message' => 'Урок успешно обновлен'
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     * Удалить урок
     */
    public function delete(Request $request, Response $response, array $args): Response
    {
        $lesson = Lesson::find($args['id']);

        if (!$lesson) {
            $response->getBody()->write(json_encode([
                'success' => false,
                'message' => 'Урок не найден'
            ]));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }

        $lesson->delete();

        $response->getBody()->write(json_encode([
            'success' => true,
            'message' => 'Урок успешно удален'
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     * Получить уроки по группам (классам)
     */
    public function byGradeLevel(Request $request, Response $response): Response
    {
        $lessons = Lesson::with(['category', 'tag'])
            ->orderBy('grade_level_les')
            ->orderBy('date_les')
            ->get()
            ->groupBy('grade_level_les');

        $response->getBody()->write(json_encode([
            'success' => true,
            'data' => $lessons
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * @param $data
     * @return array
     */
    private function validateLesson($data): array
    {
        $errors = [];

        if (!isset($data['title_les']) || empty(trim($data['title_les']))) {
            $errors['title_les'] = 'Название урока обязательно';
        } elseif (strlen($data['title_les']) > 255) {
            $errors['title_les'] = 'Название урока не должно превышать 255 символов';
        }

        if (isset($data['description_les']) && strlen($data['description_les']) > 255) {
            $errors['description_les'] = 'Описание не должно превышать 255 символов';
        }

        if (!isset($data['date_les']) || empty($data['date_les'])) {
            $errors['date_les'] = 'Дата урока обязательна';
        } elseif (!strtotime($data['date_les'])) {
            $errors['date_les'] = 'Неверный формат даты';
        }

        if (!isset($data['grade_level_les']) || empty(trim($data['grade_level_les']))) {
            $errors['grade_level_les'] = 'Уровень класса обязателен';
        } elseif (strlen($data['grade_level_les']) > 45) {
            $errors['grade_level_les'] = 'Уровень класса не должен превышать 45 символов';
        }

        if (!isset($data['categories_id_cat']) || empty($data['categories_id_cat'])) {
            $errors['categories_id_cat'] = 'Категория обязательна';
        }

        if (!isset($data['tags_id_tag']) || empty($data['tags_id_tag'])) {
            $errors['tags_id_tag'] = 'Тег обязателен';
        }

        return $errors;
    }
}