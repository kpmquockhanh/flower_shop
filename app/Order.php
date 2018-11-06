<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'payment_id',
        'shipper_id',
        'transaction_status',
        'total_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function shipper()
    {
        return $this->belongsTo(Shipper::class);
    }

    private $status_type = [
        'Chờ xét duyệt',
        'Đang xử lí',
        'Đang vận chuyển',
    ];
    private $status_color = [
        'primary',
        'info',
        'success',
    ];
    public function getStatusAttribute()
    {
        return array_get($this->status_type, $this->transaction_status);
    }
    public function getStatusTextColorAttribute()
    {
        return array_get($this->status_color, $this->transaction_status);
    }
}
