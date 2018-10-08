<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','location','status','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $name_type = [
        1 => 'Saler',
        2 => 'Deverloper',
        3 => 'Admin',
    ];

    protected $status_name = [
        0 => 'Vô hiệu hóa',
        1 => 'Kích hoạt',
    ];

    public function getNameTypeAttribute(){
        return array_get($this->name_type,$this->type);
    }

    public function getNameStatusAttribute(){
        return array_get($this->status_name,$this->status);
    }


}
