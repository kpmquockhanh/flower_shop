<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $fillable = [
        'admin_id',
        'shipper_name',
        'shipper_phone',
    ];
}
