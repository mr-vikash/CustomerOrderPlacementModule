<?php

namespace App\Models;
use App\Models\Customer;
use App\Models\PaymentMethod;
use App\Models\Transaction;
use App\Models\OrderItem;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['product_name', 'customer_id', 'payment_method_id', 'status', 'price'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
