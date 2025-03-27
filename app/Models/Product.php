<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CartItem;

class Product extends Model
{
    public function cart_items()
    {
        return $this->hasMany(CartItem::class);
    }
}
