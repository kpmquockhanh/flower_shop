<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Flower extends Model
{
    protected $fillable = [
        'name',
        'show',
        'message',
        'saleoff',
        'price',
        'quantity',
        'image',
    ];


    public function canChange()
    {
        if (Auth::guard('admin')->check())
            return $this->admin_id == Auth::guard('admin')->id() || Auth::guard('admin')->user()->type == 3;
        else
            return false;
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
