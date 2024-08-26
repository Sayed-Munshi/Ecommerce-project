<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    use HasFactory;

    /**
     * Relation with order table
    */
    public function rel_to_order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
