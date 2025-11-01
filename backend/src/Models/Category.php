<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id_cat';
    public $timestamps = false;

    protected $fillable = [
        'name_cat',
        'description_cat'
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];

    /**
     * Получить все уроки категории
     */
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class, 'categories_id_cat', 'id_cat');
    }
}