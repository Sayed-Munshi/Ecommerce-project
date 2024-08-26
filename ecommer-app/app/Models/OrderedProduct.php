<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedProduct extends Model
{
    use HasFactory;

    /**
     * Relation with product table
    */
    public function rel_to_product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    /**
     * Relation with user table
    */
    public function rel_to_user()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
}
