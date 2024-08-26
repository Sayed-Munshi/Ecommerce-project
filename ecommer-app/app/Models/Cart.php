<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'quantity',
    ];

    /**
     * Relation with product table
    */
    public function rel_to_product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
