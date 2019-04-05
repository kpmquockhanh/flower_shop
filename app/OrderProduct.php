<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable = [
        'order_id',
        'flower_id',
        'quantity',
    ];

    public function flower()
    {
        return $this->belongsTo(Flower::class);
    }
}
