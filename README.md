# Разговоры о важном - Иркутская область

## Для Frontend разработчиков (Vue 3)

Образовательная платформа для проведения классных часов "Разговоры о важном" в школах Иркутской области.

## Быстрый старт

## Полезные команды Docker

```bash
# Остановить контейнеры
docker-compose down

# Пересоздать БД (осторожно - удалит данные!)
docker-compose down -v
docker-compose up -d --build

# Посмотреть логи
docker-compose logs -f app

# Войти в контейнер PHP
docker exec -it irkutsk_lessons_app bash

# Войти в MySQL
docker exec -it irkutsk_lessons_mysql mysql -u xily -p
```

### 1. Запуск Backend (Docker)

```bash
# Клонировать репозиторий
git clone https://github.com/Ximelay/conversations_in_irkutsk-_region
cd conversations_in_irkutsk-_region

# Получить .env файлы у Project-manager

# Запустить Docker контейнеры
docker-compose up -d --build

# Проверить статус
docker-compose ps
```

### 2. Доступ к API

- **Base URL**: `http://localhost:8080`
- **API Prefix**: `/api`
- **Frontend статика**: `http://localhost:8080/` (когда разместите в `/frontend`)

### Структура данных

#### Category (Категория)
```javascript
{
  "id_cat": 1,                    // number - ID категории
  "name_cat": "string",           // string - Название категории (max 255)
  "description_cat": "string",     // string|null - Описание (max 255)
  "created_at": "2024-11-01T..."  // datetime - Дата создания
}
```

#### Tag (Тег)
```javascript
{
  "id_tag": 1,           // number - ID тега
  "name_tag": "string"   // string - Название тега (max 255)
}
```

#### Lesson (Урок)
```javascript
{
  "id_les": 1,                      // number - ID урока
  "title_les": "string",             // string - Заголовок (max 255)
  "description_les": "string",       // string|null - Описание (max 255)
  "date_les": "2024-11-04",         // date - Дата проведения
  "grade_level_les": "5-7 классы",  // string - Уровень класса (max 45)
  "created_at": "2024-11-01T...",   // datetime - Дата создания
  "categories_id_cat": 1,           // number - ID категории
  "tags_id_tag": 1,                  // number - ID тега
  "category": {...},                 // object - Вложенный объект категории
  "tag": {...}                       // object - Вложенный объект тега
}
```

## API Endpoints

### Categories (Категории)

| Метод  | Endpoint               | Описание                 | Параметры                           |
|--------|------------------------|--------------------------|-------------------------------------|
| GET    | `/api/categories`      | Получить все категории   | -                                   |
| GET    | `/api/categories/{id}` | Получить категорию по ID | `id` - ID категории                 |
| POST   | `/api/categories`      | Создать категорию        | Body: `{name_cat, description_cat}` |
| PUT    | `/api/categories/{id}` | Обновить категорию       | Body: `{name_cat, description_cat}` |
| DELETE | `/api/categories/{id}` | Удалить категорию        | `id` - ID категории                 |

### Tags (Теги)

| Метод  | Endpoint         | Описание           | Параметры          |
|--------|------------------|--------------------|--------------------|
| GET    | `/api/tags`      | Получить все теги  | -                  |
| GET    | `/api/tags/{id}` | Получить тег по ID | `id` - ID тега     |
| POST   | `/api/tags`      | Создать тег        | Body: `{name_tag}` |
| PUT    | `/api/tags/{id}` | Обновить тег       | Body: `{name_tag}` |
| DELETE | `/api/tags/{id}` | Удалить тег        | `id` - ID тега     |

### Lessons (Уроки)

| Метод  | Endpoint                | Описание                         | Параметры               |
|--------|-------------------------|----------------------------------|-------------------------|
| GET    | `/api/lessons`          | Получить все уроки с фильтрацией | Query params (см. ниже) |
| GET    | `/api/lessons/{id}`     | Получить урок по ID              | `id` - ID урока         |
| GET    | `/api/lessons/by-grade` | Уроки по классам                 | -                       |
| POST   | `/api/lessons`          | Создать урок                     | Body (см. ниже)         |
| PUT    | `/api/lessons/{id}`     | Обновить урок                    | Body (см. ниже)         |
| DELETE | `/api/lessons/{id}`     | Удалить урок                     | `id` - ID урока         |


#### Параметры фильтрации для GET /api/lessons:
```javascript
{
  category_id: 1,           // Фильтр по категории
  tag_id: 1,               // Фильтр по тегу
  grade_level: "5 класс",  // Фильтр по уровню класса
  date_from: "2024-11-01", // Дата от
  date_to: "2024-11-30",   // Дата до
  search: "Байкал",        // Поиск по названию/описанию
  order_by: "date_les",    // Поле сортировки (date_les, title_les и т.д.)
  order_direction: "asc",  // Направление (asc/desc)
  page: 1,                 // Страница
  limit: 20                // Количество на странице
}
```

#### Body для создания/обновления урока:
```javascript
{
  "title_les": "Название урока",          // required
  "description_les": "Описание урока",    // optional
  "date_les": "2024-11-04",              // required (YYYY-MM-DD)
  "grade_level_les": "5-7 классы",       // required
  "categories_id_cat": 1,                // required
  "tags_id_tag": 1                       // required
}
```

## Примеры использования с Axios (Vue 3)

### Установка зависимостей
```bash
npm install axios
# или
yarn add axios
```

### Создание API сервиса
```javascript
// services/api.js
import axios from 'axios'

const apiClient = axios.create({
  baseURL: 'http://localhost:8080/api',
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json'
  }
})

// Interceptor для обработки ошибок
apiClient.interceptors.response.use(
  response => response,
  error => {
    console.error('API Error:', error.response?.data)
    return Promise.reject(error)
  }
)

export default apiClient
```

### Сервис для работы с уроками
```javascript
// services/lessonService.js
import apiClient from './api'

export default {
  // Получить все уроки с фильтрами
  async getLessons(filters = {}) {
    const response = await apiClient.get('/lessons', { params: filters })
    return response.data
  },

  // Получить один урок
  async getLesson(id) {
    const response = await apiClient.get(`/lessons/${id}`)
    return response.data
  },

  // Создать урок
  async createLesson(lesson) {
    const response = await apiClient.post('/lessons', lesson)
    return response.data
  },

  // Обновить урок
  async updateLesson(id, lesson) {
    const response = await apiClient.put(`/lessons/${id}`, lesson)
    return response.data
  },

  // Удалить урок
  async deleteLesson(id) {
    const response = await apiClient.delete(`/lessons/${id}`)
    return response.data
  }
}
```

## Тестирование API

### Postman коллекция
Импортируйте файл [json-postman-import.json](cci:7://file:///C:/Users/i.lazutkin/Desktop/Projects/IntelliJ_IDEA/conversations_in_irkutsk-_region/json-postman-import.json:0:0-0:0) в Postman для тестирования всех endpoints.

## Структура проекта

```
conversations_in_irkutsk-_region/
├── backend/                 # PHP Backend (Slim Framework)
│   ├── src/
│   │   ├── Controllers/    # Контроллеры API
│   │   ├── Models/        # Eloquent модели
│   │   └── public/        # Точка входа
├── frontend/               # Ваш Vue 3 проект здесь
│   ├── src/
│   │   ├── components/
│   │   ├── views/
│   │   ├── services/     # API сервисы
│   │   └── App.vue
├── docker-compose.yml     # Docker конфигурация
├── create-db.sql         # SQL схема БД
└── .env.example         # Пример переменных окружения
```

## Важные моменты

### CORS
Backend настроен на прием запросов с любых источников.

### Валидация
- **name_cat**, **name_tag**: максимум 255 символов
- **description_cat**, **description_les**: максимум 255 символов, может быть null
- **title_les**: максимум 255 символов, обязательное
- **grade_level_les**: максимум 45 символов
- **date_les**: формат YYYY-MM-DD

### Обработка ошибок
Все ошибки возвращаются в формате:
```javascript
{
  "success": false,
  "message": "Описание ошибки",
  "errors": {             // Для валидационных ошибок
    "field_name": "Сообщение об ошибке"
  }
}
```

### Успешные ответы
```javascript
{
  "success": true,
  "data": {...},          // Данные
  "message": "Сообщение", // Опционально
  "pagination": {...}     // Для списков с пагинацией
}
```

## Контакты и поддержка

При возникновении вопросов по API обращайтесь к backend-разработчику.
