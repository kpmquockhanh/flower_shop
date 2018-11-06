<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'flower_id',
        'quantity',
        'created_at',
        'updated_at',
    ];
    public function flower()
    {
        return $this->belongsTo(Flower::class);
    }
}
