<?php

namespace App\Models;
use App\Models\Order;
use App\Models\CartItem;
use App\Models\PaymentMethod;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'pin_code',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function payment_methods()
    {
        return $this->belongsToMany(PaymentMethod::class);
    }

    public function cart_items()
    {
        return $this->hasMany(CartItem::class);
    }
}
