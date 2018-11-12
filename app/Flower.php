<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Flower extends Model
{
//    use SoftDeletes;
    protected $fillable = [
        'name',
        'show',
        'message',
        'saleoff',
        'price',
        'quantity',
        'image',
        'admin_id'
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
    public function getSalePriceAttribute()
    {
        return $this->price*(1-$this->saleoff);
    }

    public function categories()
    {
        return $this->hasMany(CategoryFlower::class);
    }

}
