<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'total_amount', 'status', 'shipping_address',
    ];

    public function user() // each order belong to a user
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems() // order have emany items 
    {
        return $this->hasMany(OrderItem::class);
    }
    public function calculateTotalPrice()
    {
        return $this->orderItems->sum(function ($orderItem) {
            return $orderItem->quantity * $orderItem->price;
        });
    }
}
