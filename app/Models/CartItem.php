<?php

namespace App\Models;
use App\Models\Customer;
use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
