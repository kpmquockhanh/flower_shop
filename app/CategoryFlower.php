<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryFlower extends Model
{

    protected $fillable = [
        'flower_id',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
