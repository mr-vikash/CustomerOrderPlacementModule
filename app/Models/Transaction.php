<?php

namespace App\Models;
use App\Models\Order;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'order_id',
        'amount',
        'status',
    ];
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
