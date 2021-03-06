<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'image',
        'shipping_address',
        'billing_address',
        'user_id',
        'phone'
    ];
    public $timestamps =false;

}
