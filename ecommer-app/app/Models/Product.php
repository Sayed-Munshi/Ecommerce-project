<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Relation with user table
    */
    public function rel_to_user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relation with subcategory
    */
    public function rel_to_subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }
}
