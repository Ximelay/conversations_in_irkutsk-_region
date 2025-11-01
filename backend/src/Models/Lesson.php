<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lesson extends Model
{
    protected $table = 'lessons';
    protected $primaryKey = 'id_les';
    public $timestamps = false;

    protected $fillable = [
        'title_les',
        'description_les',
        'date_les',
        'grade_level_les',
        'categories_id_cat',
        'tags_id_tag'
    ];

    protected $casts = [
        'date_les' => 'date',
        'created_at' => 'datetime'
    ];

    /**
     * Получить категорию урока
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'categories_id_cat', 'id_cat');
    }

    /**
     * Получить тег урока
     */
    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'tags_id_tag', 'id_tag');
    }
}