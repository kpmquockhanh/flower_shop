<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payment_type',
        'payment_allowed'
    ];

    protected $status_name = [
        0 => 'Không cho phép',
        1 => 'Cho phép',
    ];

    public function getNameStatusAttribute(){
        return array_get($this->status_name,$this->payment_allowed);
    }
}
