<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    protected $table = 'tags';
    protected $primaryKey = 'id_tag';
    public $timestamps = false;

    protected $fillable = [
        'name_tag'
    ];

    /**
     * Получить все уроки с этим тегом
     */
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class, 'tags_id_tag', 'id_tag');
    }
}