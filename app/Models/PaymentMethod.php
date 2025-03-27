<?php

namespace App\Models;
use App\Model\Customer;
use App\Model\Order;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }
}
